<?

# jalal7h@gmail.com
# 2016/09/12
# 1.1

function uploadr_management_list(){

	#
	# list
	$path = "data/uploadr";
	if(! file_exists($path) ){
		mkdir($path);
	}
	
	if(! $dp = opendir( $path )){
		echo __FUNCTION__." at ".__LINE__;

	} else while( $d = readdir($dp) ){
		
		if( substr($d, 0, 1)=="." ){
			continue;
		
		} else if( is_file( $path."/".$d )){
			$list[ $d ] = $path."/".$d;
		
		} else if(! $dp2 = opendir( $path."/".$d ) ){
			echo __FUNCTION__." at ".__LINE__;
		
		} else while( $d2 = readdir( $dp2 ) ){
			
			if( substr($d2,0,1)=="." ){
				continue;
			
			} else {
				$list[ $d2 ] = $path."/".$d."/".$d2;
			}

		}

	}

	if( sizeof($list) ){
		
		ksort( $list );
		$c = "<div class='".__FUNCTION__."'>";
		
		$tdd = 20;
		$p = intval($_REQUEST['p']);
		$stt = $p * $tdd;

		$pge = ceil(sizeof($list) / $tdd);
		
		$i = 0;
		
		foreach ($list as $file_name => $file_path ) {

			if( $i++ < $stt ){
				continue;
			
			} else if( $i > $stt+$tdd ){
				continue;
			}

			if( strlen($file_name) > 23 ){
				$file_name = substr($file_name, 0, 10).
					"...".
					substr($file_name, -10);
			}

			$ext = substr(strtolower(strrchr($file_name, ".")),1);
			
			if( in_array( $ext, ["jpg","jpeg","png","gif"] ) ){
				$c.= "
				<div class=\"r\">
					<img src='resize/40x40/".$file_path."' />
					<a target=_blank href='".$file_path."' >".$file_name."</a>
				</div>";
			
			} else {
				$c.= "
				<div class=\"r\">
					<div rel='".$file_path."' class='imgc notpic'>".strtoupper($ext)."</div>
					<a target=_blank href='".$file_path."' >".$file_name."</a>
				</div>";
			}

		}

		$c.= "<div class='divider'></div><br>";
		$c.= "<div class='paging'>";
		
		for( $x=0; $x<$pge ; $x++){
			
			if( $x==$p ){
				$c.= "<b>".($x+1)."</b>";
			
			} else {
				$c.= "<a href='./?page=admin&cp=".$_REQUEST['cp']."&func=".$_REQUEST['func']."&p=".$x."'>".($x+1)."</a>";
			}

		}

		$c.= "</div>";
		$c.= "</div>";
		echo $c;

	}
	
}


