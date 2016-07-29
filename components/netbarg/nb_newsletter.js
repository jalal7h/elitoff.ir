
$(document).ready(function(){
	
	$('.nb_newsletter').on('submit', function(e){
		e.preventDefault();
		var email_address = $('.nb_newsletter .email').val();
		if(email_address==''){
			;//
		} else {
			wget( './', '', 'do_action=nb_newsletter_save&email_address=' + email_address );
			hitbox('<center style="line-height: 20px !important; direction:rtl;margin-top:60px;font-size:13px;" ><img style="margin-bottom: 10px;" src="image.list/listmaker_check59.png"><br><br>آدرس ایمیل شما ثبت شد.<br>منتظر دریافت تخفیف های روزانه باشید.</center>', 400, 250);
		}
	});
	
	$('#footer .down .newsletter').on('submit', function(e){
		e.preventDefault();
		var email_address = $('#footer .down .newsletter .email').val();
		if(email_address==''){
			;//
		} else {
			wget( './', '', 'do_action=nb_newsletter_save&email_address=' + email_address );
			hitbox('<center style="line-height: 20px !important; direction:rtl;margin-top:60px;font-size:13px;" ><img style="margin-bottom: 10px;" src="image.list/listmaker_check59.png"><br><br>آدرس ایمیل شما ثبت شد.<br>منتظر دریافت تخفیف های روزانه باشید.</center>', 400, 250);
		}
	});
	
})


