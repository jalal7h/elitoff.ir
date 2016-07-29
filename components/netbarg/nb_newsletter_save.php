<?
$GLOBALS['do_action'][] = 'nb_newsletter_save';

function nb_newsletter_save(){
	if(!$email_address = $_REQUEST['email_address']){
		e("error on nb_newsletter_save - ".__LINE__);
	} else if(!dbq(" INSERT INTO `newsletter` (`email`) VALUES ('$email_address') ")){
		e("error on nb_newsletter_save - ".__LINE__);
	} else {
		e("email saved");
	}
}

