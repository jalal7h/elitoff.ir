<?
$GLOBALS['do_action'][] = 'nb_newsletter_cron';

function nb_newsletter_cron(){

	// ignore it if there is no new nb
	if(tab__temp( 'nb_newsletter_new_nb_added' )==0){
		return true;
	} else {
		tab__temp( 'nb_newsletter_new_nb_added', $insert=true, "0" );
	}

	$mail = nb_newsletter_cron_make();
	// echo $mail['content'];
	nb_newsletter_cron_send_all( $mail );
}

function nb_newsletter_cron_make(){

	if(!$rs = dbq(" SELECT * FROM `netbarg` WHERE 1 AND `hide`='0' ORDER BY `id` DESC LIMIT 11 ")){
		e("error on nb_newsletter_cron_make: ".__LINE__);
	} else if(!dbn($rs)){
		e("no record to send - nb_newsletter_cron_make: ".__LINE__);
	} else {
		$c = "<div style='direction: rtl; margin: 30px auto;'>";
		$c.= "<a href='"._URL."' target='_blank' style='display: block; text-decoration: none; font: bold 20px tahoma; direction: rtl; color: #f06305; padding: 0 20px 20px 0; '>آخرین تخفیف های ".tab__temp('main_title')." - <span lang=fa >".substr(U2Vaght(U()), 0, 10)."</span></a>";
		$c.= nb_newsletter_cron_make_first( dbf($rs) );
		while ($rw = dbf($rs)) {
			$c.= nb_newsletter_cron_make_this( $rw );
		}
		$c.= "</div>";
	}
	// echo ":".$c.":";die(); 
	$mail = array(
		"subject" => ("آخرین تخفیف های ".tab__temp('main_title')." - ".substr(U2Vaght(U()), 0, 10) ) ,
		"content" => $c,
	);

	return $mail;
}


function nb_newsletter_cron_make_first( $rw ){

	$c.= "<a href='".link_netbarg($rw)."' target='_blank' style='box-sizing: border-box; position: relative; top: 0px; margin: 5px; color: #f06305; text-decoration: none; text-shadow: 0 0 4px #fff; font: bold 14px tahoma; display: block; width: 98%; border: 2px solid #f06305;'>";
	
	$c.= "<img src='"._URL."/".$rw['pic']."' style='width: 100%; margin: 0; border: 0px;' /><br>";
	
	$c.= "<div style='box-sizing: border-box; display: block; padding: 20px 10px; position: absolute; z-index: 10; direction: rtl;
	overflow: hidden; width: 100%; bottom: 0px; right: 0px; background-color: rgba(255,255,255,0.8)'>".sub_string($rw['name'], 0, 150)."</div>";
	
	$c.= "</a>";

	return $c;
}

function nb_newsletter_cron_make_this( $rw ){
	
	$c.= "<a href='".link_netbarg($rw)."' target='_blank' style='box-sizing: border-box; position: relative; top: 0px; margin: 5px; color: #f06305; text-decoration: none; text-shadow: 0 0 4px #fff; font: bold 14px tahoma; display: inline-block; width: 48%; border: 2px solid #f06305;'>";
	
	$c.= "<img src='"._URL."/".$rw['pic']."' style='width: 100%; margin: 0; border: 0px;' /><br>";
	
	$c.= "<div style='box-sizing: border-box; display: block; padding: 20px 10px; position: absolute; z-index: 10; direction: rtl;
	overflow: hidden; width: 100%; bottom: 0px; right: 0px; background-color: rgba(255,255,255,0.8)'>".sub_string($rw['name'], 0, 150)."</div>";
	
	$c.= "</a>";
	
	return $c;
}


function nb_newsletter_cron_send_all( $mail ){
	#
	# all whome asked to receive daily off;
	if(!$rs = dbq(" SELECT `email` FROM `newsletter` ")){
		e("nb_newsletter_cron_send_all - ".__LINE__);
	} else while($rw = dbf($rs)){
		$email = strtolower($rw['email']);
		if(!$email = trim($email)){
			continue;
		} else if(!strstr($email, "@")){
			continue;
		} else if(!strstr($email, ".")){
			continue;
		} else if(@in_array($email, $list_of_emails)){
			continue;
		} else {
			$list_of_emails[] = $email;
			nb_newsletter_cron_send( $email , $mail );
		}
	}
	#
	# all signed users;
	if(!$rs = dbq(" SELECT `username` FROM `users` WHERE `permission`<2 ")){
		e("nb_newsletter_cron_send_all - ".__LINE__);
	} else while($rw = dbf($rs)){
		$email = strtolower($rw['username']);
		if(!$email = trim($email)){
			continue;
		} else if(!strstr($email, "@")){
			continue;
		} else if(!strstr($email, ".")){
			continue;
		} else if(@in_array($email, $list_of_emails)){
			continue;
		} else {
			$list_of_emails[] = $email;
			nb_newsletter_cron_send( $email , $mail );
		}
	}
}

function nb_newsletter_cron_send( $email , $mail ){
	$domain = str_replace("www.", "", strtolower($_SERVER['SERVER_NAME']));
	mailq( $email , $mail['subject'] , $mail['content'] , "noreply@".$domain , $html=true );
	echo "mail queued.<br>";
}












