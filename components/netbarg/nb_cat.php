<?

function nb_cat(){
	echo "<div class='nb_cat'>";
	echo "<a href='"._URL."'>صفحه اصلی</a>";
	$cat_array = cat_display('main');
	foreach ($cat_array as $id => $name) {
		echo "<a href='".link_cat( array("id"=>$id,"name"=>$name) )."'>".trim($name)."</a>";
	}
	echo "</div>";
}

