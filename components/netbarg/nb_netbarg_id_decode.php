<?

function nb_netbarg_id_decode( $hex ){
	$dec = hexdec($hex);
	$id = $dec - 100000;

	return $id;
}

