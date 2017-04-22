	
TCEFORM.sys_file_reference.crop.config.cropVariants {
 
//TCEFORM.pages.columns.media.config.overrideChildTca.columns.crop.config.cropVariants {
    default {
        title = Default desktop
        selectedRatio = NaN
        allowedAspectRatios {
            16:9 {
                title = ratio 16/9
                value = 1.777777

            }

            4:3 {
                title = ratio 4/3
                value = 1.3333333
            }


            NaN {
                title = free
                value = 0.0
            }




        }
    }

    specialMobile {
        title = Our special mobile variant
        selectedRatio = NaN
        allowedAspectRatios {
            4:3 {
                title = ratio 4/3
                value = 1.3333333
            }
        }
        focusArea {
            
            x = 0.333333
            y = 0.333333
            width = 0.333333
            height = 0.333333
        }
        coverAreas{
           area1{
                x = 0.1
                y = 0.1
                width = 0.1
                height = 0.1

            }
           area2{
                x = 0.9
                y = 0.9
                width = 0.2
                height = 0.2

            }            
        }
    }
}