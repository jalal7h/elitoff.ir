<?

function nb_display_box_price( $rw ){
	
	$count_of_copon = dbr(dbq(" SELECT COUNT(*) FROM `netbarg_copon` WHERE `netbarg_id`='".$rw['id']."' AND `orders_item_id`='0' "), 0, 0);

	echo '
	<div class="price">
		
		<div class="off">
			<span>%'.(100-round($rw['cost']*100 / $rw['cost_orig'])).'</span>
			<span>تخفیف</span>
		</div>

		<div class="head">
			<text>پرداخت شما ('.tab__temp('money_unit').') :</text>
			<price>'.number_format($rw['cost']).'</price>
		</div>

		<div class="second">
		 	<div>'.number_format($rw['cost_orig']).'</div>
		 	<div>'.number_format($rw['cost_orig'] - $rw['cost']).'</div>
		 	<div>ارزش واقعی</div>
		 	<div>سود شما</div>
		</div>

		'.nb_display_box_price_date( $rw['date_end'] ).'
		
		<div class="vote">'.productvote_display(array('off'=> 'علاقمندی')).'</div>
		<div class="share">'.social_sharebuttons( link_netbarg($rw) , $rw['name'] ).'</div>
		
		'.( $count_of_copon ? orders_basket_addbutton( $rw , $title="خرید کارت تخفیف" ) : "<div class='sold'>تمام شد!</div>" ).'

	</div>';
}

