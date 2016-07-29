<?
$GLOBALS['cmp']['nb_management'] = _cocoro." ها";

function nb_management(){
	$url = "./?page=admin&cp=".$_REQUEST['cp'];
	
	$menu = array(
		"nb_management_list" => "لیست "._cocoro." ها",
		"nb_management_form" => "ثبت "._cocoro." جدید",
		"cat_management&l=main" => "دسته بندی",
	);
	
	listmaker_tabmenu($menu,$url);
}

