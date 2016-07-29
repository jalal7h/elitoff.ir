<?

$GLOBALS['seo_sitemap'][] = array( 
	"query" => " SELECT * FROM `_pages` WHERE 1 ORDER BY `_page` ASC ",
	"link" => '_URL."/?page=".$rw["_page"]'
);
	

