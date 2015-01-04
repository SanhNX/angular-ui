<?php
/*define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'prj_angular');*/

$username = 'root';
$password = '';
$hostname = 'localhost';
$db = 'prj_angular';

$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");


mysql_select_db($db);
mysql_query("SET NAMES 'utf8'", $dbhandle);

?>