<?

function sms_send( $to , $text ){
	
	if( tab__temp('sms_state')!='1' ){
		return false;
	}

	if( is_array($to) ){
		foreach ($to as $i => $numb) {
			sms_send( $numb, $text );
		}
	} else {

		$to = mb_ereg_replace('[^0-9]+','',$to);
		
		if(! $to = trim($to) ){
			return false;
		
		} else {
			
			// e(__FUNCTION__,__LINE__);
			
			// ################################################
			// ini_set("soap.wsdl_cache_enabled", "0");
			// $sms_client = new SoapClient('http://5.9.76.186/SendService.svc?wsdl', array('encoding'=>'UTF-8'));

			// try {
			// 	$parameters['userName'] = 'mahsa.azani';
			// 	$parameters['password'] = '0000';
			// 	$parameters['fromNumber'] = '50005345712';
			// 	$parameters['toNumbers'] = array($to);
			// 	$parameters['messageContent'] = $text;
			// 	$parameters['isFlash'] = false;
			// 	$recId = array();
			// 	$status = array();
			// 	$parameters['recId'] = &$recId ;
			// 	$parameters['status'] = &$status ;
			// 	echo $sms_client->SendSMS($parameters)->SendSMSResult;
			// 	return true;
			
			// } catch (Exception $e) {
			// 	echo 'Caught exception: ',  $e->getMessage(), "\n";
			// 	return false;
			// }
			// ################################################


			################################################
			$param = array(
				'username' => 'mahsa',
				'password' => '1328',
				'from' => "30007477",
				// 'from' => "500043000",
				'to' => array($to),
				'text' => $text
			);
			
			$domain = 'http://postgah.net/API/SendSms.ashx';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $domain);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$data = curl_exec($ch);
			curl_close($ch);
			$results = (!$data ? null : json_decode($data, true) );

			var_dump($results);

			return $results;
			################################################

		}

	}
}


