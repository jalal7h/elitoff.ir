<?

function nb_copon_downloadExcel( $array ){

	$i = 0;
	foreach( $array as $k => $code ){
		$column = $i % 10;
		$row = floor($i / 10);
		$xl[ $row ][ $column ] = $code;
		$i++;
	}

	include 'modules/PHPExcel/Excel.php';
	ExcelExport( $xl );
	die();
}

