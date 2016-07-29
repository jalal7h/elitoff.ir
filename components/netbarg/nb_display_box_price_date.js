

$(document).ready(function(){
	var nbdbpd_end = $('#nb_display_box_price_date').attr("end");
	var nbdbpd_now = $('#nb_display_box_price_date').attr("now");
	setInterval(
		function(){
			nbdbpd_now++;
			var rsec = nbdbpd_end - nbdbpd_now;
			var date = new Date(rsec*1000);
			sum_of_the_seconds = ((date.getUTCDate()-1)*3600*24) + (date.getUTCHours()*3600) + (date.getUTCMinutes()*60) + (date.getUTCSeconds());
			// console.log(  sum_of_the_seconds );
			if( sum_of_the_seconds<=5 ){
				location.reload();
			}
			$('#nb_display_box_price_date .d').html( date.getUTCDate()-1 );
			$('#nb_display_box_price_date .h').html( date.getUTCHours() );
			$('#nb_display_box_price_date .m').html( date.getUTCMinutes() );
			$('#nb_display_box_price_date .s').html( date.getUTCSeconds() );
		},
		1000
	);
})


