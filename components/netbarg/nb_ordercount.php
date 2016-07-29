<?

function nb_ordercount( $netbarg_id ){
	$order_count = number_format(dbr(dbq(" SELECT COUNT(*) FROM `netbarg_copon` WHERE `netbarg_id`='".$netbarg_id."' AND `orders_item_id`!='0' "),0,0));

	return $order_count;
}

