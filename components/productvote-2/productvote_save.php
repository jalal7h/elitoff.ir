<?
$GLOBALS['do_action'][] = 'productvote_save';

function productvote_save(){
	$ip = $_SERVER['REMOTE_ADDR'];
	if(!$product_id = intval($_REQUEST['product_id'])){
		return e(__FILE__.__LINE__);
	} else if(!$vote_name = $_REQUEST['vote_name']){
		return e(__FILE__.__LINE__);
	} else if(!$vote_value = $_REQUEST['vote_value']){
		return e(__FILE__.__LINE__);
	} else if(!$rs = dbq(" SELECT COUNT(*) FROM `productvote` WHERE `vote_name`='$vote_name' AND `product_id`='$product_id' AND `ip`='$ip' LIMIT 1 ")){
		return e(__FILE__.__LINE__);
	} else if(dbr($rs,0,0)!=0){
		// update
		if(!dbq(" UPDATE `productvote` SET `vote_value`='$vote_value' WHERE `vote_name`='$vote_name' AND `product_id`='$product_id' AND `ip`='$ip' LIMIT 1 ")){
			return e(__FILE__.__LINE__);
		}
	} else {
		// insert
		if(!dbq(" INSERT INTO `productvote` (`vote_name`,`vote_value`,`product_id`,`ip`) VALUES ('$vote_name','$vote_value','$product_id','$ip') ")){
			return e(__FILE__.__LINE__);
		}
	}
}

