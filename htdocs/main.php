<?php
ini_set('display_errors', 0);

require __DIR__ . '/../vendor/autoload.php';
// indigoの動作に必要なパラメタ記載ファイル
require __DIR__ . '/parameter.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Indigo</title>

		<!-- jQuery読み込み -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	

		<!-- BootstrapのCSS読み込み -->
		<link rel="stylesheet" href="./../res/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./../res/styles/common.css">

		<!-- BootstrapのJS読み込み -->
		<script src="./../res/bootstrap/js/bootstrap.min.js"></script>
		<script src="./../res/scripts/common.js"></script>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >

		<script>
			$(function() {
				
				var dateFormat = 'yy-mm-dd';
				
				$.datepicker.setDefaults($.datepicker.regional["ja"]);
				
				$("#datepicker").datepicker({
     			   dateFormat: dateFormat
    			});
			});
		</script>

	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Indigo</a>
				</div>
			</div>
		</nav>
		<div class="container">

<?php

// parameter.php->call_parameter()
$parameter = call_parameter();
// load indigo\main
$indigo = new indigo\main($parameter);

// runメソッド実行
echo $indigo->run();
?>

		</div>
	</body>
</html>