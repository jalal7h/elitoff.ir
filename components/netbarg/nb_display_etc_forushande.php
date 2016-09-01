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
		';
	
	/***name***/
	
		if( !$rw['seller_name'] ) {

		} else {
		
		echo'<div class="seller_name">'.$rw['seller_name'].'</div>';
		}
	
	/***address***/
	
		if( !$rw['seller_address'] ) {

		} else {
			echo'<div class="seller_address">'.$rw['seller_address'].'</div>';
		}

	/***tell***/

		if( !$rw['seller_tell'] ){

		} else {
			echo'<div class="seller_tell">شماره تماس : '.$rw['seller_tell'].'</div>';
		}

	/***mobile***/

		if( !$rw['seller_tell_mobayl'] ){

		} else {
			echo'<div class="seller_tell_mobayl">شماره موبایل : '.$rw['seller_tell_mobayl'].'</div>';
		}

	/***siteAddres***/

		if( !$rw['site_addres'] ){

		} else {
			echo'<div class="site_addres">وب سایت : <a href="'.$rw['site_addres'].'">'.$rw['site_addres'].'</a></div>';
		}
	/***telegram***/

		if( !$rw['tel_addres'] ){

		} else {
			echo'<div class="tel_addres">تلگرام : '.$rw['tel_addres'].'</div>';
		}

	/***instagram***/
		
		if( !$rw['insta_addres'] ){

		} else {
			echo'<div class="insta_addres">اینستاگرام : '.$rw['insta_addres'].'</div>';
		}

		echo'
		<div class="google_maps">'.$gmc.'</div>
	</div>';
}
