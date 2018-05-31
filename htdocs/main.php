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
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Plum</a>
				</div>
				<!--
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
				-->
			</div>
		</nav>
		<div class="container">


<?php
// load Plum
$plum = new hk\plum\main(
	array(
		'_POST' => $_POST,
		'_GET' => $_GET,
		'preview_server' => array(
			array(
				'name' => 'preview1',
				'path' => './../repos/preview1/',
				'url' => 'http://preview1.localhost/'
			),
			array(
				'name' => 'preview2',
				'path' => './../repos/preview2/',
				'url' => 'http://preview2.localhost/'
			),
			array(
				'name' => 'preview3',
				'path' => './../repos/preview3/',
				'url' => 'http://preview3.localhost/'
			)
		),
		'git' => array(
			'repository' => './../repos/master/',
			'protocol' => 'https',
			'host' => 'github.com',
			'url' => 'github.com/hk-r/px2-sample-project.git',
			'username' => 'hoge',
			'password' => 'fuga'
		)
	)
);

echo $plum->run();
?>

		</div>
		<div id="loader-bg">
			<div id="loading">
				<img src="common/images/loader.gif">
			</div>
		</div>
	</body>
</html>