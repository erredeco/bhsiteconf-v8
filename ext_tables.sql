#
# Table structure for table 'pages'
#


#
# Table structure for table 'tt_content'
#

CREATE TABLE tt_content (
    teaser text,
    readmore_label varchar(255) DEFAULT '' NOT NULL,
    readmore_link varchar(1024) DEFAULT '' NOT NULL
);