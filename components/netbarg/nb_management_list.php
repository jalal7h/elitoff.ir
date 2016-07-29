<?

function nb_management_list(){
	
	switch($_REQUEST['do']){
		
		case 'saveNew':
			nb_management_saveNew();
			break;

		case 'saveEdit':
			nb_management_saveEdit();
			break;

		case 'remove': 
			nb_management_remove();
			break;

		case 'copon' :
			nb_management_copon();
			return true;
	}


	$list['query'] = " SELECT * FROM `netbarg` WHERE 1 AND `hide`='0' ORDER BY `id` DESC ";
	$list['tdd'] = 10;

	$list['target_url'] = '_URL."/?page=".$_REQUEST["page"]."&cp=".$_REQUEST["cp"]."&func=".$_REQUEST["cp"]."_form&id=".$rw["id"]';
	$list['paging_url'] = '_URL."/?page=".$_REQUEST["page"]."&cp=".$_REQUEST["cp"]."&func=".$_REQUEST["func"]';
	$list['remove_url'] = '_URL."/?page=".$_REQUEST["page"]."&cp=".$_REQUEST["cp"]."&func=".$_REQUEST["func"]."&do=remove&id=".$rw["id"]';
	$list['remove_prompt'] = '"آیا مایل به حذف هستید?"';

	$list['list_array'] = array (
		array("head"=>"عکس", "tag"=>"th", "picture" => '"resize/100x100/".$rw[\'pic\']'),
		array("head"=>"عنوان تخفیف", "content" => '$rw[\'name\']', "attr"=>array("class"=>"name")),
		array("head"=>"آزاد", "content" => 'number_format(dbr(dbq(" SELECT COUNT(*) FROM `netbarg_copon` WHERE `netbarg_id`=\'".$rw["id"]."\' AND `orders_item_id`=\'0\' "),0,0))', "attr"=>array("class"=>"order_free")),
		array("head"=>"فروش", "content" => 'number_format(dbr(dbq(" SELECT COUNT(*) FROM `netbarg_copon` WHERE `netbarg_id`=\'".$rw["id"]."\' AND `orders_item_id`!=\'0\' "),0,0))', "attr"=>array("class"=>"order_sale")),
		array("head"=>"تاریخ اتمام", "content" => 'substr(U2Vaght($rw[\'date_end\']),0,16)', "attr"=>array("class"=>"date_end")),
	);

	$list['tr_color_identifier'] = 'dbn(dbq(" SELECT * FROM `netbarg_copon` WHERE `netbarg_id`=\'".$rw["id"]."\' AND `orders_item_id`=\'0\' LIMIT 1 "))';

	$list['linkTo'][] = array(
		'url' => '_URL."/?page=".$_REQUEST["page"]."&cp=".$_REQUEST["cp"]."&func=".$_REQUEST["func"]."&do=copon&id=".$rw["id"]',
		'name' => 'کوپن',
		'width' => 58,
	);
	
	$list['paging_select'] = array(
		'cat' => "<option value=''>دسته بندی</option>".cat_display('main',$array=false),
		// 	'maghta' => "<option value=''>مقطع تحصیلی</option>".cat_display('maghta',$is_array=false,$parent=0,$optionPreStr=""),
		// 	'group' => "<option value=''>گروه شغلی</option>".cat_display('group',$is_array=false,$parent=0,$optionPreStr=""),
		// 	'jensiat' => "<option value=''>جنسیت</option>".cat_display('jensiat',$is_array=false,$parent=0,$optionPreStr=""),
	);
	
	$list['search'] = array("name");

	echo listmaker_list($list);
}

