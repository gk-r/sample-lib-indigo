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
					<a class="navbar-brand" href="#">Indigo</a>
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

		// mainクラス呼び出しディレクトリ
		'param_realpath'		=> '/var/www/html/sample-lib-indigo/htdocs/',
		'param_relativepath'	=> './',

		// indigo作業ディレクトリ（絶対パス＆ドキュメントルートからの相対パス）
		'workdir_realpath'	 	=> '/var/www/html/sample-lib-indigo/indigo_dir/',
		'workdir_relativepath'	=> './../indigo_dir/',

		'time_zone' => 'Asia/Tokyo',

		'user_id' => 'testUser01',

		'db_type' => null, // 'mysql' or null
		'mysql_db_name' => '',
		'mysql_db_host' => '',
		'mysql_db_user' => '',
		'mysql_db_pass' => '',

		'max_reserve_record' => 10,
		'max_backup_generation' => 5,

		// 後で削除
		'server_real_path' => '/var/www/html/indigo-test-project/',

		// 本番環境パス（同期先）
		'server' => array(
				array(
						'name' => 'server1',
						'real_path' => '/var/www/html/indigo-test-project/',
						'protocol' => null, // null or 'ssh' or 'ftp'
						'ip' => '',
						'port' => '',
						'user_name' => '',
						'password' => ''
				),
				array(
						'name' => 'server2',
						'real_path' => '/var/www/html/indigo-test-project2/',
						'protocol' => null, // null or 'ssh' or 'ftp'
						'ip' => '',
						'port' => '',
						'user_name' => '',
						'password' => ''
				)
		),

		'ignore' => array(
			'.git',
			'.htaccess'
		),

		'git' => array(
			// 'repository' => './../indigo_dir/repos/master/',
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