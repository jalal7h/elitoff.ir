<?
$GLOBALS['do_action'][] = 'nb_management_copon_form_downloadExcel';

function nb_management_copon_form_downloadExcel(){
	nb_copon_downloadExcel( $_SESSION['nb-copon-print-list'] );
}


