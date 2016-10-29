<?

function nb_management_copon(){
	
	if(! $id = $_REQUEST['id'] ){
		return false;
	
	} else if(! $rw = table("netbarg", $id) ){
		return false;
	}
	
	echo "<div class='nb_management_copon'>";

	echo "<div class='title' ><a href='".link_netbarg($rw)."' >همه کوپن های مربوط به :‌ ".$rw['name']."</a></div>";
	$url = "./?page=admin&cp=".$_REQUEST['cp']."&func=".$_REQUEST['func']."&do=".$_REQUEST['do']."&id=".$id;
	$menu = array(
		"nb_management_copon_list" => "لیست کوپن های فعال",
		"nb_management_copon_archive" => "لیست کوپن های فروخته شده",
		"nb_management_copon_form" => "ثبت کوپن جدید",
	);

	listmaker_tabmenu( $menu , $url , $func_k="func2" );

	echo "</div>";

}

