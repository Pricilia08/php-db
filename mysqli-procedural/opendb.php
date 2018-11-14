<?php
include 'config.php';
$conn = mysql_connect($dbhost,$dbuser,$dbpass, $dbname);
// mysql_select_db($dbname);
if(!$conn){
	die(mysqli_connect_error($conn));
}
?>