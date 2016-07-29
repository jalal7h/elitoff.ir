
// -spi-

$(document).ready(function(){

	function do_resize_jobs(){
		$('.blacktask').width( $("#main").width() );
		
		// index
		//
		// resize pic height
		newHeightForSlide = $('.nb_list_thelastone .slide').innerWidth();
		newHeightForSlide = newHeightForSlide * 422;
		newHeightForSlide = newHeightForSlide / 632;
		newHeightForSlide = Math.round(newHeightForSlide);
		$('.nb_list_thelastone .slide').height( newHeightForSlide );
		//
		// resize boxes
		if( $('.nb_list_thelastone .slide').css("display")=='block' ){
			$('.nb_list_thelastone .price').width( "100%" );
		} else {
			nbltlo_width = $(".nb_list_thelastone").innerWidth();
			nbltlos_width = $(".nb_list_thelastone .slide img").innerWidth();
			nbltlop_width = nbltlo_width - nbltlos_width;
			nbltlop_width-= 25;
			$('.nb_list_thelastone .price').width( nbltlop_width );
		}

		// inner page
		//
		// resize pic height
		newHeightForSlide = $('.nb_display .main > .box .slide').innerWidth();
		newHeightForSlide = newHeightForSlide * 422;
		newHeightForSlide = newHeightForSlide / 632;
		newHeightForSlide = Math.round(newHeightForSlide);
		console.log(newHeightForSlide);
		$('.nb_display .main > .box .slide').height( newHeightForSlide );
		//
		// resize boxes
		if( $('.nb_display .main > .box .slide').css("display")=='block' ){
			$('.nb_display .main > .box .price').width( "100%" );
		} else {
			nbltlo_width = $(".nb_display .main > .box").innerWidth();
			nbltlos_width = $(".nb_display .main > .box .slide img").innerWidth();
			nbltlop_width = nbltlo_width - nbltlos_width;
			nbltlop_width-= 15;
			$('.nb_display .main > .box .price').width( nbltlop_width );
		}
	}

	$(window).resize(function(){
	    do_resize_jobs();
	});
	do_resize_jobs();

});



