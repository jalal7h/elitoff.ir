<?

function nb_management_remove(){
	if(!$id = intval($_REQUEST['id'])){
		e(__FILE__.__LINE__);
	// } else if(!dbq(" DELETE FROM `netbarg` WHERE `id`='$id' LIMIT 1 ")){
	} else if(!dbq(" UPDATE `netbarg` SET `hide`='1' WHERE `id`='$id' LIMIT 1 ")){
		e(__FILE__.__LINE__);
	} else {
		return true;
	}

	return false;
}

