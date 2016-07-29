<?

function nb_display_comment( $rw ){
	echo '
	<div class="comment">
		<div class="head">نظرات کاربران</div>
		<div class="container">
			'.cm_list("netbarg").'
			'.cm_form("netbarg").'
		</div>
	</div>';
}

