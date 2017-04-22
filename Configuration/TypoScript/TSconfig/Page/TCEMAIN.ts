#################
#### TCEMAIN ####
#################
TCEMAIN {
    permissions {
    	//Set "Editors" group as default for new pages
        groupid = 2
        user = show, editcontent, edit, new, delete
        group = show, editcontent, edit, new
        everybody = 0
    }
    translateToHidden = 1
}