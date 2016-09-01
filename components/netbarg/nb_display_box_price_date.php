<?

function nb_display_box_price_date( $date ){
	
	// $date = $date - U();
	// $date = date("Y/m/d H:i:s", $date);

	error_log( date("Y/m/d H:i:s", $date) );

	return '
	<div class="date" id="nb_display_box_price_date" end="'.$date.'" now="'.U().'" >
		 	<div class="datehead">زمان باقی مانده</div>
		 	<div class="datebox">
		 		<div class="s">&nbsp;</div>
		 		<div class="m">&nbsp;</div>
		 		<div class="h">&nbsp;</div>
		 		<div class="d">&nbsp;</div>
		 		<span>ثانیه</span>
		 		<span>دقیقه</span>
		 		<span>ساعت</span>
		 		<span>روز</span>
		 	</div>
	</div>';
	
}

