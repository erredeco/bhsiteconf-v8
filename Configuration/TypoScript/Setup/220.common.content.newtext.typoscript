tt_content.newtext =< lib.contentElement
tt_content.newtext {
	templateName= Newtext 
  //the alternative TemplateRootPaths, LayoutRootPaths, PartialRootPaths are already defined as constant in constant.txt.
  //if you need further folders to place them, remember that their position in the array is .10   
	variables {
    awesomeproperty=TEXT
    awesomeproperty.data = flexform: pi_flexform:awesomeproperty  
	}
  settings{
    
  }
   
  dataProcessing {
    10 = BH\bhsiteconf\DataProcessing\FlexFormProcessor
    10 {
      fieldName = pi_flexform
      as = flexform
    }
  }   
}