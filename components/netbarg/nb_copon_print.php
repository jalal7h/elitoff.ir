<?

function nb_copon_print( $title , $array_of_items ){
	?>
	<html moznomarginboxes mozdisallowselectionprint>
	<head>
		<META http-equiv=Content-Type content="text/html; charset=utf-8">
		<title> </title>
		<style type="text/css" media="print">
		    @page 
		    {
		        size: auto;   /* auto is the initial value */
		        margin: 0mm;  /* this affects the margin in the printer settings */
		    }
		</style>
		<style type="text/css">
			* {
				margin: 0px;
				padding: 0px;
				line-height: 1 !important;
				font: normal 12px tahoma;
				direction: rtl;
			}
			.nb_copon_print {
				padding: 20px;
			}
			.nb_copon_print .head {
				font-size: 18px;
				padding: 0 10px 20px 10px;
				line-height: 30px !important;
			}
			.nb_copon_print .r {
				direction: ltr;
				text-align: center;
				display: inline-block;
				width: 180px;
				font: bold 18px 'courier new', tahoma;
				text-transform: uppercase;
				padding: 10px 5px;
				  letter-spacing: 2px;
			}
		</style>
	</head>
	<body>
	<?
	echo "<div class='nb_copon_print'>";
	echo "<div class='head'>".$title."</div>";
	foreach($array_of_items as $i => $code){
		echo "<div class='r'>".$code."</div>";
	}
	echo "</div>";
	echo "</div>";
	?>
	<script type="text/javascript">
		window.print();
	</script>
	</body>
	</html>
	<?
}

