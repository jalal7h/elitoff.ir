<?

function sms_send( $to , $text ){
	
	if( tab__temp('sms_state')!='1' ){
		return false;
	}

	if( is_array($to) ){
		foreach( $to as $i => $numb ){
			sms_send( $numb, $text );
		}
		return true;

	} else if(! $to = mb_ereg_replace('[^0-9]+','',$to) ){
		return false;
	
	} else if(! $to = trim($to) ){
		return false;
		
	} else if(! $html = file_get_contents("http://postgah.net/API/SendSms.ashx?username=mahsa&password=1328&from=30005825000120&to=".$to."&text="$text) ){
		e(__FUNCTION__,__LINE__);

	} else {
		return true;
	}

	return false;

}


