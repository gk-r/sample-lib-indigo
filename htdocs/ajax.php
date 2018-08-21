<?php
ini_set('display_errors', 0);

require __DIR__ . '/../vendor/autoload.php';
// indigoの動作に必要なパラメタ記載ファイル
require __DIR__ . '/parameter.php';

// parameter.php->call_parameter()
$parameter = call_parameter();
// load indigo\ajax
$indigo = new indigo\ajax($parameter);

// get_commit_hashメソッド実行
echo $indigo->get_commit_hash();
?>