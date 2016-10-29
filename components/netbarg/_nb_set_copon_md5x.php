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
			continue;
		
		} else {
			$code_md5x = md5x( $code_numb , 6 );
			$code = $code_ID."-".$code_md5x;
			dbs( 'netbarg_copon', [ 'code'=>$code ] , [ 'id'=>$id ] );
			echo ". ";
		}

	}

}


