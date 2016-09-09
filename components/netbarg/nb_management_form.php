<?

function nb_management_form(){
	if(!$id = $_REQUEST['id']){
		// new
	} else if(!$tNetbarg = table("netbarg", $id)){
		echo __FUNCTION__.__LINE__;
	} else {
		// edit
		$date_end = U2Vaght($tNetbarg['date_end']);
		$tNetbarg['date_end'] = substr($date_end, 0, 10);
		$tNetbarg['date_end_clock'] = substr($date_end, 11, 5);
	}
	#
	# fix the x,y if its wrong
	if( (trim(str_replace(',', '', $tNetbarg['google_maps']))=='') or ($tNetbarg['google_maps']=='undefined,undefined') ){
		$tNetbarg['google_maps'] = "36.26320331881649,59.58832025527954";
	}

	echo
	fm(array('name'=>'nbmf' , 'class'=>'nbmf' , 'method'=>'post' , 'action'=>'./?page='.$_REQUEST['page'].'&cp='.$_REQUEST['cp'].'&func='.$_REQUEST['cp'].'_list', 'save_switch'=>'do')).

	'<div class="topbox">'.
	ff(array("عنوان",'n:name*'=>$tNetbarg,'inDiv')).
	
	ff(array('دسته بندی','n:cat*'=>$tNetbarg,'option'=>cat_display('main'),'inDiv')).

	ff('clear').
	ff(array("قیمت با تخفیف",'class'=>'numeric','n:cost*'=>$tNetbarg,'inDiv')).
	ff(array('قیمت بدون تخفیف','class'=>'numeric','n:cost_orig*'=>$tNetbarg,'inDiv')).
	ff(array('تاریخ اتمام','class'=>'calendar','n:date_end*'=>$tNetbarg,'inDiv')).
	ff(array('ساعت','class'=>'clock','n:date_end_clock*'=>$tNetbarg,'inDiv')).
	ff('clear').
	ff('hr').

	ff('اطلاعات فروشنده :‌').
	ff(array('نام فروشنده','n:seller_name*'=>$tNetbarg,'inDiv')).
	ff(array('شماره ثابت','n:seller_tell'=>$tNetbarg,'inDiv')).
	ff('clear').
	ff(array('آدرس فروشگاه','n:seller_address*'=>$tNetbarg,'inDiv')).
	"<div class='position_select'>".position_select($tNetbarg)."</div>".

	'</div>'.

	'<div class="topbox">'.
	google_maps(array('width'=>'470px', 'height'=>'373px', 'x,y'=>$tNetbarg['google_maps'])).
	'</div>'.
	
	ff(array( lmtc('netbarg:seller_cell') ,'n:seller_cell'=>$tNetbarg,'inDiv')).
	ff(array( lmtc('netbarg:seller_telegram') ,'n:seller_telegram'=>$tNetbarg,'inDiv')).
	ff(array( lmtc('netbarg:seller_instagram') ,'n:seller_instagram'=>$tNetbarg,'inDiv')).
	ff(array( lmtc('netbarg:seller_website') ,'n:seller_website'=>$tNetbarg,'inDiv')).
	
	ff('hr').
	
	'<div id="inDiv_nbmf_text_vijegi" ><span>ویژگی ها</span>'.
	ff(array('ویژگی ها','t:textarea','class'=>'tinymce','n:text_vijegi'=>$tNetbarg)).
	'</div>'.
	ff('hr').
	
	'<div id="inDiv_nbmf_text_sharayet" ><span>شرایط استفاده</span>'.
	ff(array('شرایط استفاده','t:textarea','class'=>'tinymce','n:text_sharayet'=>$tNetbarg)).
	'</div>'.
	ff('hr').

	'<div id="inDiv_nbmf_text_tozihat" ><span>توضیحات</span>'.
	ff(array('توضیحات','t:textarea','class'=>'tinymce','n:text_tozihat'=>$tNetbarg)).
	'</div>'.

	ff('hr').
	"<div style='margin: 0 40px 20px 0'>سایز عکس ها دقیقا  632x422</div>".
	ff(array('عکس','n:netbarg[]+'=>'','accept'=>'image/*','inDiv')).
	ff('br').
	
	ff('clear').
	( $id ? "" : ff('hr').ff(array('تعداد کوپن برای صدور',"class"=>"numeric",'n:count_of_copon*'=>$tNetbarg,'inDiv')) ).
	ff('hr').
	ff(array('پیشنهاد ویژه','type'=>'checkbox','n:thelastone'=>$tNetbarg,'inDiv')).
	ff(array('t:submit','class'=>'submit_button','n:submit'=>'ثبت','inDiv')).
	ff('clear').
	fm('close' , $listifcsselements=false );
}

