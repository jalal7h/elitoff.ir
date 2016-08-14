<?

/*-spi-*/

function userpanel_menu(){
	
	if( ! $uid = $_SESSION['uid']){
		return true;
	} else if( ! $rw = table("users",$uid) ){
		return false;
	} else if($_REQUEST['page']!=14){
		return true;
	} else {
		echo "<script>
		$(document).ready(function(){
			$('.nb_cat').hide();
		});
		</script>";
	}

	?>
	<style>
		.userpanel_menu > a.current ,
		.userpanel_menu > a:hover {
			background-image: url(<?=imgp('menu-inner-bg.png')?>);
		}
	</style>
	<?

	if( $rw['profile_pic']!='' ){
		echo '<a class="userpanel_menu userpanel_menu_profile_pic" href="./?page='.$_REQUEST['page'].'&do=users_profile_form"><img src="resize/164x250/'.$rw['profile_pic'].'" /></a>';
	} else {
		echo '<div class="profile_avatar"><img src="'._URL.'/image_list/avatar-not-found.png"/></div>';
		// echo "its not;";
	}

	echo '<div class="userpanel_menu">';
	if(!$_REQUEST['do']){
		foreach($GLOBALS['userpanel_item'] as $_REQUEST['do'] => $name){
			break;
		}
	}
	echo '<a href="'._URL.'"><span>صفحه اصلی</span></a>';
	foreach($GLOBALS['userpanel_item'] as $func => $name){
		echo '<a href="'._URL.'/?page='.$_REQUEST['page'].'&do='.$func.'"'.($_REQUEST['do']==$func?" class=current ":"").'><span>'.$name.'</span></a>';
	}
	echo "</div>";
}

