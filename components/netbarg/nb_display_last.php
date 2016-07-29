<?

function nb_display_last(){
	#
	# list
	$list['name'] = 'nb_display_last';
	$list['tdd'] = 6;
	$list['progressive'] = false;
	$list['quiet_if_empty'] = true;
	$list['exclude_in_query'] = true;
	$list['query'] = " SELECT * FROM `netbarg` WHERE 1 AND `hide`='0' AND `date_end`>".U()." ORDER BY `id` DESC ";
	$list['target_url'] = 'link_netbarg($rw)';
	$list['target_blank'] = true;
	$list['pattern'] = '"
		<img src=\'resize/300x300/".$rw["pic"]."\' />
		<div class=\'name\'>".sub_string($rw["name"],0,360)."</div>
		<div class=\'etc\'>
			<span style=\"background-image: url(\'".imgp(\'percent-holder.png\')."\')\" class=\'percent\'>% ".(100-round($rw[\'cost\']*100 / $rw[\'cost_orig\']))."</span>
		 	<span class=\'position\'>
		 	 	<icon></icon>
			 	".position_for_showcase( $rw[\'position_str\'] )."
			</span>
		 	<span class=\'order_count\'>
		 		".nb_ordercount($rw[\'id\'])."
		 		<icon></icon>
		 	</span>
		</div>
		<div class=\'blackbox\'>
		  	<span class=\'text\'>پرداخت شما</span>
		  	<span class=\'cost\'>".number_format($rw[\'cost\'])." ".tab__temp(\'money_unit\')."</span>
		  	<span>
		  	 	<span class=\'cost_orig\'>".number_format($rw[\'cost_orig\'])."<br>ارزش واقعی</span>
		  	 	<span class=\'percent\'>٪".(100-round($rw[\'cost\']*100 / $rw[\'cost_orig\']))."<br>تخفیف</span>
		  	</span>
		</div>"';

	if($c = listmaker_showcase($list)){
		echo $c;
	}
}

