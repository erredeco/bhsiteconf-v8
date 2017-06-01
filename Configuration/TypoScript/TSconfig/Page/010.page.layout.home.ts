## ---------------------------------------------------------
# backend layout for home page
## ---------------------------------------------------------
mod.web_layout.BackendLayouts {
  frontend_home {
    title = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:backend_layout.home.title
    description = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:backend_layout.home.description
    icon = homepagelayout
    config {
      backend_layout {
        colCount = 1
        rowCount = 2
        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:layout.column.top
                colPos = 1
              }
            }
          }
          2 {
            columns {
              1 {
                name = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:layout.column.main
                colPos = 0
              }
            }
          }
        }
      }
    }
  }
}

mod.web_layout.BackendLayouts.frontend_home {
    title = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:backend_layout.home.title
    description = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:backend_layout.home.description
    icon = homepagelayout
    config {

        backend_layout {
        	colCount = 1
        	rowCount = 2
        	rows {
        		1 {
        			columns {
        				1 {
        					name = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:layout.column.main
        					colPos = 0
        				}
        			}
        		}
        		2 {
        			columns {
        				1 {
        					name = LLL:EXT:bhsiteconf/Resources/Private/Language/backend.xlf:layout.column.bottom
        					colPos = 1
        				}
        			}
        		}
        	}
        }        
                
    }
}











