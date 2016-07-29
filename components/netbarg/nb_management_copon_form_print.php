<?
$GLOBALS['do_action'][] = 'nb_management_copon_form_print';

function nb_management_copon_form_print(){
	$code = $_SESSION['nb-copon-print-list'][0];
	$code = explode("-", $code);
	$code = $code[0];
	$id = nb_netbarg_id_decode($code);
	$name = table("netbarg", $id, "name");
	nb_copon_print( $name , $_SESSION['nb-copon-print-list'] );
}

