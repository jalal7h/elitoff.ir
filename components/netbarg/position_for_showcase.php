<?

function position_for_showcase( $pos ){
	$pos = explode(',', $pos);
	$pos = $pos[4];
	$pos = position_translate( $pos );

	return $pos;
}

