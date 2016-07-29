<?

function nb_list_thelastone(){

	echo "<div class='nb_list_thelastone'>";
	if($cat_id = intval($_REQUEST['cat_id'])){
		$query_cat = " AND `cat`='$cat_id' ";
	}
	if(!$rs = dbq(" SELECT * FROM `netbarg` WHERE 1 AND `hide`='0' $query_cat AND `date_end`>".U()." ORDER BY `thelastone` DESC , `id` DESC LIMIT 1 ")){
		e("err - nb_list_thelastone - ".__LINE__);
		die();
	} else if(!dbn($rs)){
		e("err - nb_list_thelastone - ".__LINE__." - there is no record to show as the last one");
	} else if(!$rw = dbf($rs)){
		e("err - nb_list_thelastone - ".__LINE__);
		die();
	} else {
		nb_list_thelastone_slide( $rw );
		nb_list_thelastone_price( $rw );
		$GLOBALS['exclude_in_query'][] = $rw['id'];
	}
	echo "</div>";
}

