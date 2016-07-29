<?

$GLOBALS['seo_sitemap'][] = array( 
	"query" => " SELECT * FROM `netbarg` WHERE 1 AND `hide`='0' AND `date_end`>".date('U')." ORDER BY `id` ASC ",
	"link" => 'link_netbarg($rw)'
);

$GLOBALS['seo_sitemap'][] = array( 
	"query" => " SELECT * FROM `cat` WHERE `cat`='main' ORDER BY `ord` ASC ",
	"link" => 'link_cat( $rw )'
);
	

