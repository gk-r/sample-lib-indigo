
<?php
ini_set('display_errors', 0);

require __DIR__ . '/../vendor/autoload.php';
// indigoの動作に必要なパラメタ記載ファイル
require __DIR__ . '/parameter.php';

// load indigo\main
// parameter.php->$parameter_array
$indigo = new indigo\main($parameter_array);

// cron_runメソッド実行
echo $indigo->cron_run();
?>