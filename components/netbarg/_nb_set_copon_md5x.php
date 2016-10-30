<?
$GLOBALS['do_action'][] = '_nb_set_copon_md5x';

function _nb_set_copon_md5x(){
	
	if(! $rs = dbq(" SELECT * FROM `netbarg_copon` WHERE 1 ") ){
		e();

	} else while( $rw = dbf($rs) ){

		$id = $rw['id'];

		$code = $rw['code'];
		$code_expl = explode('-', $code);
		$code_ID = $code_expl[0];
		$code_numb = $code_expl[1];
		
		if(! is_numeric($code_numb) ){
			$q++;
			continue;
		
		} else while( 1 ){
		
			$code_md5x = md5x( $code_numb , 6 );
			$code = $code_ID."-".$code_md5x;
			
			if( dbq(" UPDATE `netbarg_copon` SET `code`='$code' WHERE `id`='$id' LIMIT 1 ") ){
				$z++;
				echo ". ";
				break;
			}
		
			$code_numb = $code;
			
		}

	}

	echo "q = $q ; z = $z ";

}


