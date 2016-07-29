<?

function nb_display_box_slide( $rw ){
	
	echo '<div class="slide">';

	#
	# heart icon
	$coh = dbr(dbq(" SELECT COUNT(*) FROM `productvote` WHERE `product_id`='".$rw['id']."' "),0,0);
	// $coh = 1300;
	if($coh > 10000){
		$coh/=1000;
		$coh.="K";
	} else if($coh > 1000){
		$coh/=100;
		$coh.="K";
		$coh = substr($coh,0,-1).".".substr($coh,-1);
	}
	echo "
	<div class='heart'>
		<icon></icon>
		<span>".$coh."</span>
	</div>";

	#
	# the main slide
	$dir_path = "data/netbarg/".$rw['id'];
	$file_list = fileupload_filelist( $dir_path );
	foreach ($file_list as $k => $file) {
		echo "<img src='".$file."' />";
	}
	
	#
	# bottom left menu
	$position_in_menu_left = explode(',', $rw['position_str']);
	$position_in_menu_left = $position_in_menu_left[4];
	$position_in_menu_left = position_translate( $position_in_menu_left );
	echo '
	<div class="menu">
		<div class="order_count"><span>'.nb_ordercount($rw['id']).'</span> خرید</div>
		<div class="position">'.$position_in_menu_left.'</div>	
	</div>';

	echo '</div>';

	?>
	<script>
		$(document).ready(function(){
			size0 = $('.nb_display .main .box .slide > img').size();
			// size0 = 3;
			i0 = 1;
			disable_auto_flag = 0;
			setInterval( function(){
				if(disable_auto_flag==0){
					$('.nb_display .main .box .slide > img:nth-child('+i0+')').css({"opacity":"0.0"});
					i0 = (i0%size0);
					i0++;
					// console.log(i0);
					$('.nb_display .main .box .slide > img:nth-child('+i0+')').css({"opacity":"1.0"});
				}
			}, 3000);
			$('.nb_display .main .box .slide > img').on("mouseenter", function(){
				disable_auto_flag = 1;
			}).on("mouseleave", function(){
				disable_auto_flag = 0;
			})
		})
	</script>
	<?
}

