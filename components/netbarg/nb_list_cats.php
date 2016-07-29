<?

function nb_list_cats(){

	#
	# list of cat
	if(!$rs_cat = dbq(" SELECT * FROM `cat` WHERE 1 AND `cat`='main' ORDER BY `ord`,`name` ")){
		echo __LINE__;
		echo dbe();
	} else while($rw_cat = dbf($rs_cat)){
		#
		# list
		$list['name'] = 'nb_list_cats';
		$list['head'] = $rw_cat['name']."<a class='cat_link' href='./cat-".$rw_cat['id']."-".name_for_link($rw_cat['name']).".html'>مشاهده تخفیف های این دسته »</a>";
		$list['tdd'] = 4;
		$list['progressive'] = false;
		$list['quiet_if_empty'] = true;
		$list['exclude_in_query'] = true;
		$list['query'] = " SELECT * FROM `netbarg` WHERE 1 AND `hide`='0' AND `cat`='".$rw_cat['id']."' AND `date_end`>".U()." ORDER BY `id` DESC ";
		$list['target_url'] = 'link_netbarg($rw)';
		$list['target_blank'] = false;
		// $list['paging_url'] = '_URL."/?page=".$_REQUEST["page"]."&q=".$_REQUEST["q"]';
		$list['pattern'] = '"
			<img src=\'resize/300x300/".$rw["pic"]."\' />
			<div class=\'name\'>".sub_string($rw["name"],0,60)."</div>
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
}

