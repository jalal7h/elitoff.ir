<?

function nb_display(){
	if(!$id = $_REQUEST['id']){
		echo __FUNCTION__.__LINE__;
	} else if(!$rw = table("netbarg", $id)){
		echo "<script>location.href='404.php'; // ".__LINE__."</script>";
		die();
	} else if($rw['hide']=='1'){
		echo "<script>location.href='404.php'; // ".__LINE__."</script>";
		die();
	} else {
		?>
		<div class="nb_display">
			<div class="main">
				<?
				nb_display_head( $rw );
				?>
				<div class="box">
					<?
					nb_display_box_slide( $rw );
					nb_display_box_price( $rw );
					?>
				</div>
			</div>
			<div class="etc">
				<?
				nb_display_etc_vijegi( $rw );
				nb_display_etc_sharayet( $rw );
				nb_display_etc_forushande( $rw );
				?>
			</div>
			<div class="down" >
				<div class="left"><? nb_display_same( $rw );?></div>
				<div class="right">
					<?
					nb_display_tozihat( $rw );
					nb_display_comment( $rw );
					nb_display_last();
					?>
				</div>
			</div>
			
		</div>
		<?
	}
}

