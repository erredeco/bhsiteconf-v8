<?php
declare(strict_types = 1);

/*
 * This file is part of the package bk2k/bootstrap-package.
 * I copied it and renamed the namespace; all merit and grants must go to Benjamin Kott
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Erredeco\Bhsiteconf\DataProcessing;

use TYPO3\CMS\Core\Service\FlexFormService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/**
 * Minimal TypoScript configuration
 * Process field pi_flexform and overrides the values stored in data
 *
 * 10 = Erredeco\Bhsiteconf\DataProcessing\FlexFormProcessor
 *
 *
 * Advanced TypoScript configuration
 * Process field assigned in fieldName and stores processed data to new key
 *
 * 10 = Erredeco\Bhsiteconf\DataProcessing\FlexFormProcessor
 * 10 {
 *   fieldName = pi_flexform
 *   as = flexform
 * }
 */
class FlexFormProcessor implements DataProcessorInterface
{
    /**
     * @var FlexFormService
     */
    protected $flexFormService;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flexFormService = GeneralUtility::makeInstance(FlexFormService::class);
    }

    /**
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        // The field name to process
        $fieldName = (string) $cObj->stdWrapValue('fieldName', $processorConfiguration);
        if ($fieldName === '') {
            $fieldName = 'pi_flexform';
        }
        
        //20211106 - this correction is made to get flexform work from the children elements of b13-container!
        //See discussion here: https://github.com/b13/container/issues/146#issuecomment-894371210
        //if (!isset($processedData['data'][$fieldName])) {
        
        if (!isset($cObj->data[$fieldName])) {
            return $processedData;
        }

        // Process Flexform
        //20211106 - this correction is made to get flexform work from the children elements of b13-container!
        //See discussion here: https://github.com/b13/container/issues/146#issuecomment-894371210

        //$originalValue = $processedData['data'][$fieldName];
        

        $originalValue = $cObj->data[$fieldName];

        if (!is_string($originalValue)) {
            return $processedData;
        }
        $flexformData = $this->flexFormService->convertFlexFormContentToArray($originalValue);

        // Set the target variable
        $targetVariableName = (string) $cObj->stdWrapValue('as', $processorConfiguration);
        if ($targetVariableName !== '') {
            $processedData[$targetVariableName] = $flexformData;
        } else {
            $processedData['data'][$fieldName] = $flexformData;
        }

        return $processedData;
    }
}