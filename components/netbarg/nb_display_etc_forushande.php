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
		<div class="seller_tell">شماره تماس : '.$rw['seller_tell'].'</div>
		<div class="seller_tell_mobayl">شماره موبایل : '.$rw['seller_tell_mobayl'].'</div>
		<div class="site_addres">وب سایت : <a href="'.$rw['site_addres'].'">'.$rw['site_addres'].'</a></div>
		<div class="tel_addres">تلگرام : '.$rw['tel_addres'].'</div>
		<div class="insta_addres">اینستاگرام : '.$rw['insta_addres'].'</div>
		<div class="google_maps">'.$gmc.'</div>
	</div>';
}

