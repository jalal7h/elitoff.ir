<?
$GLOBALS['cmp']['uploadr_management'] = 'آپلود فایل';

function uploadr_management(){
	
	$url = "./?page=admin&cp=".$_REQUEST['cp'];
	$menu = array(
		__FUNCTION__."_form" => "آپلود فایل",
		__FUNCTION__."_list" => "لیست فایل ها",
	);
	listmaker_tabmenu($menu,$url);
}


