
<?php
ini_set('display_errors', 0);

// require_once("./../.px_execute.php");
require __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Plum</title>
		<!-- BootstrapのCSS読み込み -->
		<link href="common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery読み込み -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- BootstrapのJS読み込み -->
		<script src="common/bootstrap/js/bootstrap.min.js"></script>
		<script src="common/scripts/common.js"></script>
		<link href="common/styles/common.css" rel="stylesheet">

		<link rel="stylesheet" href="./../indigo_dir/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./../indigo_dir/styles/common.css">

		<script src="./../indigo_dir/bootstrap/js/bootstrap.min.js"></script>
		<script src="./../indigo_dir/scripts/common.js"></script>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
					<a class="navbar-brand" href="#">Plum</a>
				</div>
				
				<div class="collapse navbar-collapse" id="nav_target">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a id="init_btn" style="cursor:pointer;">Initialize</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
			</div>
		</nav>
		<div class="container">

<?php

// load Plum
$cron = new indigo\cron(
	array(
		'_POST' => $_POST,
		'_GET' => $_GET,

		// cron実行ファイル
		'project_real_path' => '/var/www/html/sample-lib-indigo/htdocs/cron.php',

		// indigo作業ディレクトリ
		'indigo_workdir_path' => './../indigo_dir/',
		// 本番環境パス
		'project_real_path' => '/var/www/html/indigo-test-project/',

		'time_zone' => 'Asia/Tokyo',

		'user_id' => 'batchUser',

		'db_type' => null, // 'mysql' or null
		'mysql_db_name' => 'dummy_dbname',
		'mysql_db_host' => 'dummy_dbhost',
		'mysql_db_user' => 'dummy_user',
		'mysql_db_pass' => 'dummy_pass',

		// 'git' => array(
		// 	'repository' => './../indigo_dir/repos/master/',
		// 	'protocol' => 'https',
		// 	'host' => 'github.com',
		// 	'url' => 'github.com/gushikawa/indigo-test-project.git',
		// 	'username' => 'hoge',
		// 	'password' => 'fuga'
		// )
	)
);

echo $cron->run();
?>

		</div>
		<div id="loader-bg">
			<div id="loading">
				<img src="common/images/loader.gif">
			</div>
		</div>
	</body>
</html>