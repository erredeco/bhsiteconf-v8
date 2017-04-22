# -------------------------------------------------------------
# I add here the call for the css and js files
#
# 
# -------------------------------------------------------------

page {
	includeCSS {
		all = EXT:bhsiteconf/Resources/Public/Assets/Css/app.min.css
	}

	/* remove it for now
	includeJSLibs {
		modernizr = EXT:bhsiteconf/Resources/Public/Assets/Js/Vendor/modernizr-custom.min.js
		modernizr.forceOnTop = 1

	}
	*/

	includeJSFooterlibs {
    	jquery = EXT:bhsiteconf/Resources/Public/Assets/Js/Vendor/jquery.min.js
    	jquery.forceOnTop = 1
	}

	includeJSFooter {
    	all = EXT:bhsiteconf/Resources/Public/Assets/Js/all.min.js	
	}
}






