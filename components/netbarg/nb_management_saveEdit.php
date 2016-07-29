<?

function nb_management_saveEdit(){
	
	#
	# fix variables
	$_REQUEST['date_end'] = Vaght2U($_REQUEST['date_end']." ".$_REQUEST['date_end_clock'].":00");
	$_REQUEST['google_maps'] = $_REQUEST['google_maps'][0];
	if($_REQUEST['google_maps']=='undefined,undefined'){
		$tNetbarg['google_maps'] = "36.26320331881649,59.58832025527954";
	}
	

	#
	#
	if(!$_POST){
		e(__FILE__.__LINE__);
	} else if(!$id = $_REQUEST['id']){
		e(__FILE__.__LINE__);
	} else if(!dbq(" UPDATE `netbarg` SET 
		`name`='".$_REQUEST['name']."',
		`cat`='".$_REQUEST['cat']."',
		`cost`='".$_REQUEST['cost']."',
		`cost_orig`='".$_REQUEST['cost_orig']."',
		`date_end`='".$_REQUEST['date_end']."',
		`text_vijegi`='".$_REQUEST['text_vijegi']."',
		`text_sharayet`='".$_REQUEST['text_sharayet']."',
		`text_tozihat`='".$_REQUEST['text_tozihat']."',
		`position_str`='".$_REQUEST['position_str']."',
		`google_maps`='".$_REQUEST['google_maps']."',
		`seller_name`='".$_REQUEST['seller_name']."',
		`seller_tell`='".$_REQUEST['seller_tell']."',
		`thelastone`='".$_REQUEST['thelastone']."',
		`seller_address`='".$_REQUEST['seller_address']."'
		 WHERE `id`='$id' LIMIT 1 ")){
		e( dbe() );
	} else {
		#
		# upload photo
		$file_nnme_arr = fileupload_upload( array("id"=>$id, "input"=>"netbarg") );
		#
		# update in db
		if($file_nnme_arr[0]!=''){
			dbq(" UPDATE `netbarg` SET `pic`='".$file_nnme_arr[0]."' WHERE `id`='$id' LIMIT 1 ");
		}
	}
}

