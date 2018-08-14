
<?php

$parameter_array = array(

	'_POST' => $_POST,
	'_GET' => $_GET,

	// indigo作業用ディレクトリ（絶対パス）
	// 'realpath_workdir'	 	=> '/var/www/html/sample-lib-indigo/indigo_dir/',
	'realpath_workdir'	 	=> '/workspace/sample-lib-indigo/indigo_dir/',

	// リソースディレクトリ（ドキュメントルートからの相対パス）
	'relativepath_resourcedir'	=> './../res/',

	// ajax呼出クラス（ドキュメントルートからの相対パス）
	'realpath_ajax_call'		=> './ajax.php',

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
);