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
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
		

		<!-- BootstrapのJS読み込み -->
<!-- 		<script src="common/bootstrap/js/bootstrap.min.js"></script>
		<script src="common/scripts/common.js"></script>
		<link href="common/styles/common.css" rel="stylesheet"> -->

		<link rel="stylesheet" href="./../res/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./../res/styles/common.css">

		<script src="./../res/bootstrap/js/bootstrap.min.js"></script>
		<script src="./../res/scripts/common.js"></script>

		<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
		
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

		// indigo作業用ディレクトリ（絶対パス）
		'realpath_workdir'	 	=> '/var/www/html/sample-lib-indigo/indigo_dir/',

		// リソースディレクトリ（ドキュメントルートからの相対パス）
		'relativepath_resourcedir'	=> './../res/',

		// ajax呼出クラス（絶対パス）
		'realpath_ajax_call'		=> '/var/www/html/sample-lib-indigo/htdocs/',

		// 画面表示上のタイムゾーン
		'time_zone' => 'Asia/Tokyo',

		// ユーザID
		'user_id' => 'user01',

		// DB設定
		'db' => array(
			// 'mysql' or null（nullの場合はSQLite3を使用する）
			'db_type' => null,
			'mysql_db_name' => '',
			'mysql_db_host' => '',
			'mysql_db_user' => '',
			'mysql_db_pass' => ''
		),

		// 予約最大件数
		'max_reserve_record' => 10,
		// バックアップ世代管理件数
		'max_backup_generation' => 5,

		// 本番環境パス（同期先）※バージョン0.1.0時点では先頭の設定内容のみ有効
		'server' => array(
				array(
						'name' => 'server1',
						'real_path' => '/var/www/html/indigo-test-project/'
				),
				array(
						'name' => 'server2',
						'real_path' => '/var/www/html/indigo-test-project2/'
				)
		),

		// 同期除外ディレクトリ、またはファイル
		'ignore' => array(
			'.git',
			'.htaccess'
		),

		// Git情報定義
		'git' => array(
			'giturl' => 'https://github.com/gk-r/indigo-test-project.git',
			'username' => 'hoge',
			'password' => 'fuga'
		)
	)
);

echo $indigo->run();
?>

		</div>
		<!-- <div id="loader-bg">
			<div id="loading">
				<img src="common/images/loader.gif">
			</div>
		</div> -->
	</body>
</html>