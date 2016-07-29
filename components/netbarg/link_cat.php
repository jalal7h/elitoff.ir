<?

function link_cat( $rw ){
	$link = _URL."/cat-".$rw['id']."-".name_for_link($rw['name']).".html";

	return $link;
}

