<?

function nb_display_tozihat( $rw ){
	if(!$rw['text_tozihat'] = trim($rw['text_tozihat'])){
		;//
	} else {
		echo '
		<div class="tozihat">
			<div class="head">توضیحات</div>
			<div class="text">'.$rw['text_tozihat'].'</div>
		</div>';
	}
}

