tt_content.gridelements_pi1.20.10.setup.twocolumnscontainer < lib.gridelements.defaultGridSetup
tt_content.gridelements_pi1.20.10.setup.twocolumnscontainer {
  cObject.templateName = GridElementTwoColumns
	cObject.dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
            references.fieldName = media
        	as = backgroundimage 
        }
	       
	}
}

