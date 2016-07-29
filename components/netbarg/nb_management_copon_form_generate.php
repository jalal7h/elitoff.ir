<?

function nb_management_copon_form_generate( $count , $netbarg_id=null ){
	
	if(!$netbarg_id){
		if(!$netbarg_id = intval($_REQUEST['id'])){
			return false;
		}
	}

	if(!$count = intval($count)){
		return false;
	} else {
		$nbccc = dbr(dbq(" SELECT COUNT(*) FROM `netbarg_copon` WHERE `netbarg_id`='$netbarg_id' "), 0, 0);
		$_SESSION['nb-copon-print-list'] = null;
		for($i=1; $i<=$count; $i++){
			$_SESSION['nb-copon-print-list'][] = nb_management_copon_form_generate_this( $netbarg_id , $nbccc+$i );
		}
		echo "
		<div class='nb_management_copon_form_generate'>
			<div class='text'>$count کوپن صادر شد.</div>
			<a target=_blank class='submit_button' href='./?do_action=nb_management_copon_form_print'>چاپ کوپن های صادر شده</a><a class='submit_button' href='./?do_action=nb_management_copon_form_downloadExcel'>دانلود فایل اکسل حاوی کوپن ها</a>

		</div>";
	}
}

function nb_management_copon_form_generate_this( $netbarg_id , $nbccc ){
	$code = nb_netbarg_id_encode($netbarg_id)."-".($nbccc+1000);
	if(!dbq(" INSERT INTO `netbarg_copon` (`netbarg_id`,`code`) VALUES ('$netbarg_id','$code') ")){
		echo("nb_management_copon_form_generate_this - ".__LINE__);
		return false;
	} else {
		return $code;
	}
}

