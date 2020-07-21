<?php

// $server = 'localhost';
// $userName = 'root';
// $password = '';
// $database = 'cms';

// $conn = mysqli_connect($server,$userName,$password,$database);
// if (!$conn) {
// 	die('could not connect'.mysqli_error());
// }

define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'cms');

$conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if (!$conn) {
	die('could not connect'.mysqli_error());
}

// 	$db['db_host'] = 'localhost';
// 	$db['db_user'] = 'root';
// 	$db['db_pass'] = '';
// 	$db['db_name'] = 'localhost';

// 	foreach ($db as $key => $value) {
// 		define(strtoupper($key), $value);
// 	}
// 	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// // 	if (!$conn) {
// // 		die('could not connect'.mysqli_error());	
// // }
?>