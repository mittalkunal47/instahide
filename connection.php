<?php
$username="root";
$password="";
$dbname="online_exam";
$hostname="localhost";
mysql_connect($hostname,$username,$password) or die("Error in connection");
mysql_select_db($dbname) or die("Database not found");
?>
