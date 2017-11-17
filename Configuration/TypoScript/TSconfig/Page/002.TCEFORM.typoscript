TCEFORM {
	tt_content {
		//remove h1,h2,h5,h6; default is already h2.
		header_layout {
			removeItems = 1,2,5,6
            altLabels{
                default = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.header_layout.default
                3 = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.header_layout.3 
                4 = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.header_layout.4                
            } 
        }
    
		layout {
        //remove in general
            removeItems = 0,1,2,3
            disableNoMatchingValueElement = 1
            addItems{
                default = LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.default
            }
            types {
            //textmedia
                textmedia {
                    removeItems = 0,1,2,3
                    addItems {
                        customstyle1 = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.layout.types.textmedia.style1
                        customstyle2 = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:ttcontent.layout.types.textmedia.style2
                    }
                }
            }
		}
	}
}