<?

function nb_display_etc_forushande( $rw ){
	
	$list = array(
		'width' => '285px',
		'height' => '320px',
		'x,y' => $rw['google_maps'],
		'disable_marker' => true,
	);
	$gmc = google_maps($list);

	echo '
	<div class="forushande">
		<div class="head">مشخصات فروشنده</div>
		<div class="seller_name">'.$rw['seller_name'].'</div>
		<div class="seller_address">'.$rw['seller_address'].'</div>
		<div class="seller_tell">'.$rw['seller_tell'].'</div>
		<div class="google_maps">'.$gmc.'</div>
	</div>';
}

