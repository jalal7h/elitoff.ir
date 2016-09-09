<?

function nb_display_etc_forushande( $rw ){
	
	$list = array(
		'width' => '285px',
		'height' => '320px',
		'x,y' => $rw['google_maps'],
		'disable_marker' => true,
	);
	$gmc = google_maps($list);

	#
	# fix cell 
	if( $seller_cell = trim($rw['seller_cell']) ){
		if( substr($seller_cell,0,3)=='+98' ){
			$seller_cell = "0" . substr($seller_cell, 3);
		}
		$seller_cell_link = "tel:".$seller_cell;
	}

	#
	# fix telegram
	if( $seller_telegram = trim($rw['seller_telegram']) ){
		
		$seller_telegram_text = urlencode("سلام، من از الیت‌آف تخفیف شما رو دیدم");

		if( substr($seller_telegram,0,2)=='98' ){
			$seller_telegram = '+'.$seller_telegram;
		}
		if( substr($seller_telegram,0,1)=='9' ){
			$seller_telegram = '0'.$seller_telegram;
		}
		if( substr($seller_telegram,0,2)=='09' ){
			$seller_telegram = '+98' . substr($seller_telegram, 1);
		}
		$seller_telegram_name = $seller_telegram;
		$seller_telegram_link = "tg://msg?text=".$seller_telegram_text."&to=".$seller_telegram;

	}	

	#
	# fix instagram
	if( $seller_instagram = trim($rw['seller_instagram']) ){
		
		if( substr($seller_instagram,0,4)=='http' ){
			$seller_instagram_name = explode('instagram.com/', $seller_instagram)[1];
			$seller_instagram_name = "@".explode('/', $seller_instagram_name)[0];
			$seller_instagram_link = $seller_instagram;	
		
		} else {
			if( substr($seller_instagram,0,1)!="@" ){
				$seller_instagram = "@".$seller_instagram;
			}
			$seller_instagram_name = $seller_instagram;
			$seller_instagram_link = "https://www.instagram.com/".substr($seller_instagram,1)."/";
		}

	}

	#
	# fix website
	if( $seller_website = trim($rw['seller_website']) ){
		$seller_website_name = str_replace( ['http://','https://','www.'], '', $seller_website );
		$seller_website_name = explode('/', $seller_website_name)[0];
		if( substr($seller_website,0,4)!='http' ){
			$seller_website_link = 'http://'.$seller_website;
		}
	}

	echo '
	<div class="forushande">
		<div class="head">مشخصات فروشنده</div>
		<div class="seller_name">'.$rw['seller_name'].'</div>

		'.( $rw['seller_tell'] ? '<div class="seller_info seller_tell"><span>'.lmtc('netbarg:seller_tell').'</span><span>'.$rw['seller_tell'].'</span></div>' : '' ).'

		'.( $seller_cell ? '<div class="seller_info seller_cell"><span>'.lmtc('netbarg:seller_cell').'</span><span><a rel="nofollow" href="'.$seller_cell_link.'" dir=ltr class="cell_link">'.$seller_cell.'</a></span></div>' : '' ).'

		'.( $seller_telegram ? '<div class="seller_info seller_telegram"><span>'.lmtc('netbarg:seller_telegram').'</span><span><a rel="nofollow" href="'.$seller_telegram_link	.'" dir=ltr class="telegram_link">'.$seller_telegram_name.'</a></span></div>' : '' ).'
		
		'.( $seller_instagram_name ? '<div class="seller_info seller_instagram"><span>'.lmtc('netbarg:seller_instagram').'</span><span><a rel="nofollow" target="_blank" href="'.$seller_instagram_link.'" dir="ltr" class="instagram_link">'.$seller_instagram_name.'</a></span></div>' : '' ).'
		
		'.( $seller_website ? '<div class="seller_info seller_website"><span>'.lmtc('netbarg:seller_website').'</span><span><a rel="nofollow" target="_blank" href="'.$seller_website_link.'" class="ltr" class="website_link" >'.$seller_website_name.'</a></span></div>' : '' ).'

		<div class="seller_address">'.$rw['seller_address'].'</div>
		<div class="google_maps">'.$gmc.'</div>
	</div>';
}

