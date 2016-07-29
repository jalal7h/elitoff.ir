<?
$GLOBALS['do_action'][] = 'nb_management_copon_list_downloadExcel';

function nb_management_copon_list_downloadExcel(){
	if(!$netbarg_id = $_REQUEST['netbarg_id']){
		e("nb_management_copon_list_downloadExcel - ".__LINE__);
	} else if(!$rw_netbarg = table("netbarg", $netbarg_id)){
		e("nb_management_copon_list_downloadExcel - ".__LINE__);
	} else if(!$rs = dbq(" SELECT * FROM `netbarg_copon` WHERE `netbarg_id`='$netbarg_id' AND `orders_item_id`='0' ")){
		e("nb_management_copon_list_print - ".__LINE__);
	} else {
		while($rw = dbf($rs)){
			$array[] = $rw['code'];
		}
		nb_copon_downloadExcel( $array );
	}
}


