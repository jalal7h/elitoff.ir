<?

#
# tell everyone to know it happened

function nb_broadcastThisOrderConfirm( $order_id ){
	
	if(!$rw_orders = table("orders", $order_id)){
		e(__FUNCTION__." : ".__LINE__);
	} else if(!$rs_item = dbq(" SELECT * FROM `orders_item` WHERE `order_id`='".$order_id."' ")){
		e(__FUNCTION__." : ".__LINE__);
	} else if(dbn($rs_item)==0){
		return false;
	} else while($rw_item = dbf($rs_item)){
		$content.= table("netbarg", $rw_item['product_id'], "name")."\n";
		if(!$rs_copon = dbq(" SELECT * FROM `netbarg_copon` WHERE `netbarg_id`='".$rw_item['product_id']."' AND `orders_item_id`='".$rw_item['id']."' ORDER BY `code` ASC ")){
			e(__FUNCTION__." : ".__LINE__);
		} else while($rw_copon = dbf($rs_copon)){
			$content.= $rw_copon['code']."\n";
		}
		$content.= "\n";
	}

	$rw_users = table("users", $rw_orders['uid']);

	#
	# tell it to admin
	msg( "admin", "nb_broadcastThisOrderConfirm_admin_msg" , 
		 array(
		 	"user_name"=>$rw_users['name'],
		 	"content"=>$content,
		 )
	);

	#
	# tell it to user
	msg( $rw_users['username'], "nb_broadcastThisOrderConfirm_user_msg" , 
		 array(
		 	"content"=>$content,
		 )
	);
	sms( $rw_users['cell'] , "nb_broadcastThisOrderConfirm_user_sms" , 
		 array(
		 	"content"=>$content,
		 )
	);
}

