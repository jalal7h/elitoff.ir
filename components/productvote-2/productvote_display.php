<?

# jalal7h@gmail.com
# 2015/09/05
# Version 1.0.0

// productvote_display(array(
// 	'design'=> 'طراحی',
// 	'features'=> 'امکانات',
// 	'performance'=> 'کارایی',
// ));

function productvote_display( $list ){
	if(!$product_id = $_REQUEST['id']){
		return e("error on ".__FILE__.__LINE__);
	}
	$c.= "<div class='productvote_display'>";
	foreach ($list as $vote_name => $vote_title) {
		if(!$rs = dbq(" SELECT SUM(`vote_value`) as `sum`, COUNT(*) as `count` FROM `productvote` WHERE `vote_name`='$vote_name' AND `product_id`='$product_id' ")){
			e("error on ".__FILE__.__LINE__);
		} else if(!$rw = dbf($rs)){
			e("error on ".__FILE__.__LINE__);
		} else {
			$rw['title'] = $vote_title;
			$rw['name'] = $vote_name;
			// $rw['count'] = 10;
			// $rw['sum'] = 653; // between 0 to 1000 (each vote between 0 and 100)

			$c.= productvote_display_this( $rw );
		}
	}
	$c.= "</div>";

	return $c;
}

function productvote_display_this( $rw ){
	if(!$product_id = $_REQUEST['id']){
		return e("error on ".__FILE__.__LINE__);
	}
	$vote_sum = intval($rw['sum']);
	$vote_count = intval($rw['count']);
	if($vote_count==0){
		$width = 0;
	} else {
		$width = round( ($vote_sum*100) / $vote_count );
		$width = (float) ($width/100);
	}
	$c.= "
	<div class='record'>
	 	<div class='head'>".$rw['title']."</div>
	 	<div class='box'>
	 		<div product_id='".$product_id."' vote_name='".$rw['name']."' class='inner-container'>
				<div class='inner' style='width:".$width."%;'></div>
			</div>
		</div>
	</div>";

	return $c;
}

