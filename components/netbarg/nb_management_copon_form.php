<?

function nb_management_copon_form(){
	if($count = $_REQUEST['count']){
		nb_management_copon_form_generate( $count );
	} else {
		?>
		<form class="nb_management_copon_form" method="post" action="./?page=admin&cp=<?=$_REQUEST['cp']?>&func=<?=$_REQUEST['func']?>&do=<?=$_REQUEST['do']?>&id=<?=$_REQUEST['id']?>&func2=<?=$_REQUEST['func2']?>">
			<span>تعداد کوپن : </span>
			<input type="text" name="count" class="numeric" maxlength="4" value="50" />
			<input type="submit" class="submit_button" value="ایجاد کوپن" />
		</form>
		<?
	}
}



