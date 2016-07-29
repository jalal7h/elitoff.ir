<?
$GLOBALS['do_action'][] = 'nb_management_copon_archive_print';

function nb_management_copon_archive_print(){
	if(!$netbarg_id = $_REQUEST['netbarg_id']){
		e("nb_management_copon_archive_print - ".__LINE__);
	} else if(!$rw_netbarg = table("netbarg", $netbarg_id)){
		e("nb_management_copon_archive_print - ".__LINE__);
	} else {
		$name = $rw_netbarg['name'];
		if(!$rs = dbq(" SELECT * FROM `netbarg_copon` WHERE `netbarg_id`='$netbarg_id' AND `orders_item_id`!='0' ")){
			e("nb_management_copon_archive_print - ".__LINE__);
		} else while($rw = dbf($rs)){
			$array_of_items[] = $rw['code'];
		}
		nb_copon_print( $name , $array_of_items );
	}
}

