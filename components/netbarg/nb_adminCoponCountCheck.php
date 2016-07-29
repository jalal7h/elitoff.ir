<?

function nb_adminCoponCountCheck( $netbarg_id ){
	e( __FUNCTION__ . __LINE__ );
	if(!$rs = dbq(" SELECT COUNT(*) FROM `netbarg_copon` WHERE `netbarg_id`='".$netbarg_id."' AND `orders_item_id`='0' ")){
		e(__FUNCTION__." - ".__LINE__);
	} else if(!dbr($rs,0,0)){
		e( __FUNCTION__ . __LINE__ );
		msg( 
			"admin", "nb_adminCoponCountCheck" , 
			array(
				"netbarg_name"=>table("netbarg",$netbarg_id,"name"), 
				"netbarg_id"=>$netbarg_id,
			)
		);
	}
}

