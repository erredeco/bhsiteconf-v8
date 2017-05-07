tt_content.videoteaser =< lib.contentElement
tt_content.videoteaser {
	templateName= VideoTeaser 
  //the alternative TemplateRootPaths, LayoutRootPaths, PartialRootPaths are already defined as constant in constant.txt.
  //if you need further folders to place them, remember that their position in the array is .10   
	variables {
	}
	settings{

	}  
	dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
            references.fieldName = assets
        	as = teaservideo 
        }
	       
	}
    stdWrap {
        editIcons = tt_content: header [header_layout], bodytext, assets [imageorient|imagewidth|imageheight], [imagecols|imageborder], image_zoom
        editIcons {
            iconTitle.data = LLL:EXT:fluid_styled_content/Resources/Private/Language/FrontendEditing.xlf:editIcon.textmedia
        }
    }
}