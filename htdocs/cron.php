
<?php
ini_set('display_errors', 0);

// require_once("./../.px_execute.php");
require __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Indigo</title>
		<!-- BootstrapのCSS読み込み -->
		<!-- <link href="common/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
		<!-- jQuery読み込み -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- BootstrapのJS読み込み -->
<!-- 		<script src="common/bootstrap/js/bootstrap.min.js"></script>
		<script src="common/scripts/common.js"></script>
		<link href="common/styles/common.css" rel="stylesheet"> -->

		<link rel="stylesheet" href="./../res/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./../res/styles/common.css">

		<script src="./../res/bootstrap/js/bootstrap.min.js"></script>
		<script src="./../res/scripts/common.js"></script>

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

// load Plum
$main = new indigo\main(
	array(
		'_POST' => $_POST,
		'_GET' => $_GET,

		// mainクラス呼び出しディレクトリ（絶対パス＆ドキュメントルートからの相対パス）
		'param_realpath'		=> '/var/www/html/sample-lib-indigo/htdocs/',
		'param_relativepath'	=> './',

		// indigo作業ディレクトリ（絶対パス＆ドキュメントルートからの相対パス）
		'workdir_realpath'	 	=> '/var/www/html/sample-lib-indigo/indigo_dir/',
		'workdir_relativepath'	=> './../indigo_dir/',

		// リソースディレクトリ（絶対パス＆ドキュメントルートからの相対パス）
		'resdir_realpath'		=> '/var/www/html/sample-lib-indigo/res/',
		'resdir_relativepath'	=> './../res/',

		'time_zone' => 'Asia/Tokyo',

		'user_id' => 'batchUser',

		'db_type' => null, // 'mysql' or null
		'mysql_db_name' => 'dummy_dbname',
		'mysql_db_host' => 'dummy_dbhost',
		'mysql_db_user' => 'dummy_user',
		'mysql_db_pass' => 'dummy_pass',

		// // 後で削除
		// 'server_real_path' => '/var/www/html/indigo-test-project/',
		
		// 本番環境パス（同期先）
		'server' => array(
				array(
						'name' => 'server1',
						'real_path' => '/var/www/html/indigo-test-project/'
						// 'protocol' => null, // null or 'ssh' or 'ftp'
						// 'ip' => '',
						// 'port' => '',
						// 'user_name' => '',
						// 'password' => ''
				),
				array(
						'name' => 'server2',
						'real_path' => '/var/www/html/indigo-test-project2/'
						// 'protocol' => null, // null or 'ssh' or 'ftp'
						// 'ip' => '',
						// 'port' => '',
						// 'user_name' => '',
						// 'password' => ''
				)
		),

		'ignore' => array(
			'.git',
			'.htaccess'
		)

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

echo $main->cron_run();
?>

		</div>
		<div id="loader-bg">
			<div id="loading">
				<img src="common/images/loader.gif">
			</div>
		</div>
	</body>
</html>