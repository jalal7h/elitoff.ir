<?

function nb_newsletter(){
	$c.= '
	<form class="nb_newsletter" method="post" action="" >
	 	<div class="text">اطلاع از آخرین تخفیف های روزانه</div>
	 	<div class="container">
	 		<icon></icon>
	 		<input type="email" class="email" name="email" />
		 	<input type="submit" value="اشتراک" />
	 	</div>
	</form>';

	return $c;
}

