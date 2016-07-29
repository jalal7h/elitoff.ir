
$(document).ready(function(){
	$('.productvote_display .record').on('mouseenter', function(){
		console.log('enter');
		$(this).find('.inner-container').css({'background-color' : '#c00'});
	}).on('mousemove', function(event){
		console.log('this');
		var off = $(this).offset();
		new_vote_pos = off.left + $(this).width() - event.pageX;
		new_vote_pos-= 3;
		if(new_vote_pos < 5 ){
			;//
		} else if( new_vote_pos >= $(this).width()-6 ){
			;//
		} else {
			$(this).find('.inner-container').css({'width' : new_vote_pos+'px'});
		}
	}).on('click', function(){
		var off = $(this).offset();
		new_vote_pos = off.left + $(this).width() - event.pageX;
		new_vote_pos-= 2;
		if( new_vote_pos < $(this).width()-3 ){
			new_vote_pos = new_vote_pos * 100 / $(this).width();
			new_vote_pos = new_vote_pos / 5;
			new_vote_pos = parseInt(new_vote_pos);
			new_vote_pos*=5;
			new_vote_pos+= 5;
			console.log(new_vote_pos);
			var product_id = $(this).find('.inner-container').attr('product_id');
			var vote_name = $(this).find('.inner-container').attr('vote_name');
			console.log(product_id);
			$(this).find('.inner').css({'width' : new_vote_pos+'%'});
			wget('./', '', 'do_action=productvote_save&product_id='+product_id+'&vote_name='+vote_name+'&vote_value='+new_vote_pos);
		}
	}).on('mouseleave', function(){
		console.log('leave');
		$(this).find('.inner-container').css({'width' : 'auto', 'background-color': 'transparent'});
	});
});
