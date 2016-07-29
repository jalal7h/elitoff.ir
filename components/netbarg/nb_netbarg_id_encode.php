<?

function nb_netbarg_id_encode( $id ){
	$id+= 100000;
	$id = dechex($id);

	return $id;
}

