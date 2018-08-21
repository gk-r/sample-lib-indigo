
<?php
ini_set('display_errors', 0);

require __DIR__ . '/../vendor/autoload.php';
// indigoの動作に必要なパラメタ記載ファイル
require __DIR__ . '/parameter.php';

// parameter.php->call_parameter()
$parameter = call_parameter();
// load indigo\main
$indigo = new indigo\main($parameter);

// cron_runメソッド実行
echo $indigo->cron_run();
?>