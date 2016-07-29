<?

function faq_display(){
	if(!$rs = dbq(" SELECT * FROM `faq` WHERE 1 ORDER BY `name` ASC ")){
		e("error on faq_display - ".__LINE__);
	} else if(!dbn($rs)){
		e("error on faq_display - ".__LINE__);
	} else while($rw = dbf($rs)){
		$list[] = array("name"=>$rw['name'], "text"=>$rw['text']);
	}

	echo listmaker_clicktab($list);
}

