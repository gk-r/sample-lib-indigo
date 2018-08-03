<?php
ini_set('display_errors', 0);

// require_once("./../.px_execute.php");
require __DIR__ . '/../vendor/autoload.php';

// load Plum
$ajax = new indigo\ajax(
	array(
		'_POST' => $_POST,
		'branch_name'		 => $_GET['branch_name'],
		'workdir_realpath'	 => $_GET['workdir_realpath']
	)
);

echo $ajax->get_commit_hash();
?>