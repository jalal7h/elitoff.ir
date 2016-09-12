<?

function uploadr_management_form(){
	
	switch( $_REQUEST['do'] ){
		case 'saveNew':
			uploadr_management_save();
			break;
	}
	
	echo 
	fm( array( 
		'name'=>__FUNCTION__ , 
		'class'=>__FUNCTION__ , // if define , it will be
		'action'=>'./?page=admin&cp='.$_REQUEST['cp'].'&func='.$_REQUEST['func'].'&do=save', // must define
		'save_switch'=>'do', // if define , it will be saveNew/saveEdit
	)).
	
	ff(array('فایل','n:uploadr[]+*'=>'','accept'=>'*/*','inDiv', 'title_in_span'=>false)).
	ff('hr').
	ff(array('t:submit','class'=>'submit_button','n:submit'=>'آپلود','inDiv')).
	
	fm('close' , $listifcsselements=false );
}


