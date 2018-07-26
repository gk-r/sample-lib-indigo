<?php
ini_set('display_errors', 0);

// require_once("./../.px_execute.php");
require __DIR__ . '/../vendor/autoload.php';

// load Plum
$indigo = new indigo\gitManager(
	array(
		'_POST' => $_POST,
		'branch_name'		 => $_GET['branch_name'],
		'workdir_relativepath'	 => $_GET['workdir_relativepath']
	)
);

echo $indigo->get_commit_hash();
?>