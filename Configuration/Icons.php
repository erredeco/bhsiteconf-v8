<?php
	defined('TYPO3') || die();
	/** 
	 * Add icons identifiers calling TYPO3 Icon API - https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ApiOverview/Icon/Index.html
	 */

	use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

	return [
	    'accordion' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/350.b13container.accordion.svg',
	    ],

	    'additionalcontent-newtext' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/220.common.content.newtext.svg',
	    ],

	    'additionalcontent-simpleteaser' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/230.common.content.simpleteaser.svg',
	    ],

	    'additionalcontent-textteaser' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/250.common.content.textteaser.svg',
	    ],

	    'additionalcontent-videoteaser' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/240.common.content.videoteaser.svg',
	    ],

	    'container' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/interface-square-symbol.svg',
	    ],

	    'fourcolumns' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/330.b13container.fourcolumnscontainer.svg',
	    ],

	    'genericicon' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/typo3logo.svg',
	    ],	    	    

	    'highlight' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/370.gridelements.highlight.svg',
	    ],

	    'tab' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/360.gridelements.tab.svg',
	    ],

	    'threecolumns' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/320.b13container.threecolumns.svg',
	    ],

		'tx-bhsiteconf-overview-page' => [
			'provider' => SvgIconProvider::class,
			'source' => 'EXT:bhsiteconf/Resources/Public/Icons/110.doktype.page.overview.svg',
		],

	    'twocolumns' => [
	        'provider' => SvgIconProvider::class,
	        'source' => 'EXT:bhsiteconf/Resources/Public/Icons/310.b13container.twocolumns.svg',
	    ],
	];