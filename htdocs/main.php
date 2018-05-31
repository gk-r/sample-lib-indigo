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

		<link rel="stylesheet" href="res/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="res/styles/common.css">

		<script src="res/bootstrap/js/bootstrap.min.js"></script>
		<script src="res/scripts/common.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

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
$indigo = new indigo\main(
	array(
		'_POST' => $_POST,
		'_GET' => $_GET,
		'git' => array(
			'repository' => './../repos/master/',
			'protocol' => 'https',
			'host' => 'github.com',
			'url' => 'github.com/gushikawa/indigo-test-project.git',
			'username' => 'hoge',
			'password' => 'fuga'
		)
	)
);

echo $indigo->run();
?>

		</div>
		<div id="loader-bg">
			<div id="loading">
				<img src="common/images/loader.gif">
			</div>
		</div>
	</body>
</html>