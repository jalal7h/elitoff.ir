<?

$GLOBALS['seo_rss']['nb'] = array( 
	
	"query" => " SELECT 
		`id`,
		`name`,
		CONCAT(`seller_name`,' ',`text_vijegi`,' ',`text_sharayet`,' ',`text_tozihat`) as `text`,
		`date` 
		FROM `netbarg` WHERE 1 AND `hide`='0' AND `date_end`>".date("U")." ORDER BY `id` DESC LIMIT 100 ",
	
	"link" => 'link_netbarg( $rw )'
	
);
	

