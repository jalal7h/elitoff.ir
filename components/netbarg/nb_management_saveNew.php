<?

function nb_management_saveNew(){
	
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
	} else if(!dbq(" INSERT INTO `netbarg` (`name`,`cat`,`cost`,`cost_orig`,`date`,`date_end`,`text_vijegi`,`text_sharayet`,`text_tozihat`,`position_str`,`google_maps`,`seller_name`,`seller_tell`,`seller_address`,`thelastone`, `seller_cell`,`seller_website`,`seller_telegram`,`seller_instagram`) VALUES ('".$_REQUEST['name']."','".$_REQUEST['cat']."','".$_REQUEST['cost']."','".$_REQUEST['cost_orig']."','".U()."','".$_REQUEST['date_end']."','".$_REQUEST['text_vijegi']."','".$_REQUEST['text_sharayet']."','".$_REQUEST['text_tozihat']."','".$_REQUEST['position_str']."','".$_REQUEST['google_maps']."','".$_REQUEST['seller_name']."','".$_REQUEST['seller_tell']."','".$_REQUEST['seller_address']."','".$_REQUEST['thelastone']."' ,'".$_REQUEST['seller_cell']."','".$_REQUEST['seller_website']."','".$_REQUEST['seller_telegram']."','".$_REQUEST['seller_instagram']."')")){
		e( dbe() );
	} else {
		
		#
		# upload photo
		$id = dbi();
		$file_nnme_arr = fileupload_upload( array("id"=>$id, "input"=>"netbarg") );
		
		#
		# update in db
		if($file_nnme_arr[0]!=''){
			dbq(" UPDATE `netbarg` SET `pic`='".$file_nnme_arr[0]."' WHERE `id`='$id' LIMIT 1 ");
		}

		#
		# generate some copons :
		nb_management_copon_form_generate( $_REQUEST['count_of_copon'] , $id );

		#
		# ready to send automatic daily newsletter
		tab__temp( 'nb_newsletter_new_nb_added', $insert=true, "1" );
		
	}
}

