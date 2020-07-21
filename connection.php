<?php
$username="vxrqyndrqlotbi";
$password="b983e934c2ff67985313fce3a3db1c9f3ada605c204c500d7e8adbcacdb3265a";
$dbname="d9a0mvfc4mj2ic";
$hostname="ec2-54-197-254-117.compute-1.amazonaws.com";
mysql_connect($hostname,$username,$password) or die("Error in connection");
mysql_select_db($dbname) or die("Database not found");
?>
