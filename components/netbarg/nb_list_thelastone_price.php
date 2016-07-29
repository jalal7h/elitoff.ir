<?

function nb_list_thelastone_price( $rw ){
	
	$count_of_copon = dbr(dbq(" SELECT COUNT(*) FROM `netbarg_copon` WHERE `netbarg_id`='".$rw['id']."' AND `orders_item_id`='0' "), 0, 0);
	
	echo '
	<div class="price">
		
		<div class="home">'.$rw['seller_name'].'</div>
		
		<a href="'.link_netbarg($rw).'" class="title">'.$rw['name'].'</a>

		<div class="off">
			<span>%'.(100-round($rw['cost']*100 / $rw['cost_orig'])).'</span>
			<span>تخفیف</span>
		</div>

		<div class="head">
			<text>پرداخت شما ('.tab__temp('money_unit').') :</text>
			<price>'.number_format($rw['cost']).'</price>
		</div>

		'.nb_display_box_price_date( $rw['date_end'] ).'
		
		'.( $count_of_copon ? orders_basket_addbutton( $rw , $title="خرید کارت تخفیف" , link_netbarg($rw) ) : "<div class='sold'>تمام شد!</div>" ).'

		
	</div>';
}

