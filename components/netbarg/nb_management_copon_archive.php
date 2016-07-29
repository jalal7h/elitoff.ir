<?

function nb_management_copon_archive(){

	if(!$netbarg_id = $_REQUEST['id']){
		return false;
	}

	switch ($_REQUEST['do_copon']) {
		case 'remove':
			dbq(" DELETE FROM `netbarg_copon` WHERE `netbarg_id`='".$_REQUEST['id']."' AND `id`='".$_REQUEST['id_copon']."' LIMIT 1 ");
			break;
	}

	$list['name'] = 'nb_management_copon_list';
	$list['query'] = " SELECT * FROM `netbarg_copon` WHERE `netbarg_id`='$netbarg_id' AND `orders_item_id`!='0' ORDER BY `code` ASC ";
	$list['tdd'] = 10;
	
	$list['paging_url'] = '_URL."/?page=".$_REQUEST["page"]."&cp=".$_REQUEST["cp"]."&func=".$_REQUEST["func"]."&do=".$_REQUEST["do"]."&id=".$_REQUEST["id"]."&func2=".$_REQUEST["func2"]';

	$list['remove_url'] = '_URL."/?page=".$_REQUEST["page"]."&cp=".$_REQUEST["cp"]."&func=".$_REQUEST["func"]."&do=".$_REQUEST["do"]."&id=".$_REQUEST["id"]."&func2=".$_REQUEST["func2"]."&do_copon=remove&id_copon=".$rw["id"]';
	$list['remove_prompt'] = '"آیا مایل به حذف هستید?"';

	// $list['setflag_url'] = '_URL."/?page=".$_REQUEST["page"]."&cp=".$_REQUEST["cp"]."&func=".$_REQUEST["func"]."&do=active&id=".$rw["id"]';

	$list['list_array'] = array (
		array("head"=>"کد تخفیف", "tag"=>"th", "content"=>'$rw["code"]'),
	);
	
	echo listmaker_list($list);

	echo "
		<div class='nb_management_copon_form_generate'>
			<a target=_blank class='submit_button' href='./?do_action=nb_management_copon_archive_print&netbarg_id=".$netbarg_id."'>چاپ همه کوپن های فروخته شده این نت برگ</a>
		</div>";
}

