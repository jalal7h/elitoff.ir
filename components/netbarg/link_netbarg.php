<?

function link_netbarg( $rw ){
	$link = _URL."/".$rw["id"]."-".name_for_link($rw["name"],60).".html";
	
	return $link;
}

