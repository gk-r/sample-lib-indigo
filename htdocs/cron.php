
<?php
ini_set('display_errors', 0);

// require_once("./../.px_execute.php");
require __DIR__ . '/../vendor/autoload.php';

// load Plum
$indigo = new indigo\main(
	array(
		// '_POST' => $_POST,
		// '_GET' => $_GET,

		// indigo作業用ディレクトリ（絶対パス）
		'realpath_workdir' => '/var/www/html/sample-lib-indigo/indigo_dir/',

		// ユーザID
		'user_id' => 'batchUser',

		// DB設定
		'db' => array(

			// 'mysql' or null（nullの場合はSQLite3を使用）　※バージョン0.1.0時点ではmysql未対応
			'db_type' => null,

			// 以下mysql用の設定項目
			'mysql_db_name' => '',
			'mysql_db_host' => '',
			'mysql_db_user' => '',
			'mysql_db_pass' => ''
		),

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
		)
	)
);

echo $indigo->cron_run();
?>