<?

function uploadr_management_save(){
	
	$id = substr( date("U") , -3 );
	
	if(! $f = fileupload_upload([ "id"=>$id, "input"=>"uploadr", "ext"=>"all" ]) ){
		e(__FUNCTION__,__LINE__);
		return false;
	
	} else {
		
		echo "<div class='uploadr_management_save'><textarea style='height:".(sizeof($f)*70)."px'>";
		
		foreach ($f as $file) {
			echo _URL."/".$file."\n\n";
		}

		echo "</textarea></div>";
		
	}
}


