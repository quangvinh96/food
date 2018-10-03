<?php
// Database
define('DB_HOST','localhost');
define('DB_NAME','en_geography');
define('DB_USER','root');
define('DB_PASS','root');


$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($db,"utf8");
//Set website URL


