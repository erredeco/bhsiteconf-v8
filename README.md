# bhsiteconf
This extension is the provider for all the frontend configuration in TYPO3 CMS enviroment;
it depends on vhs 
                                                                      
##Installation instructions 

##copy from git

##Running instructions

The assets inside /Resources/Public/Assets/Css, ##The assets inside /Resources/Public/Assets/Js, ##The assets inside /Resources/Public/Assets/Img_layout
are provided by the project my-foundation-1 (https://github.com/erredeco/my-foundation-1)
in that project you will find a task named "deploy" that copies all the assets into that folders;
please adjust the path inside /grunt/config.js!
note that the task has no "watch" so far so it must be run manually!

so:

1) download https://github.com/erredeco/my-foundation-1 
2) decompress it into a folder, e.g  
C:\Users\riccardo.decontardi\Documents\Progetti\Public_assets_for_typo3.test7.it (win)
Users/riccardo/Progetti/Public_assets_for_typo3.7.development.it (mac)

3) adjust the path "deploydir" inside /grunt/config.js

4) open terminal and run
  - npm install
  - grunt initialize
  - grunt deploy




Vector Icons in /Resources/Public/Icons/ were:

designed by Vaadin from Flaticon - http://vaadin.com/font-icons
designed by Freepik from Flaticon - http://www.freepik.com