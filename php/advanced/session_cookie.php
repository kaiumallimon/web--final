<?php
// Session and cookie example
session_start();
$_SESSION['user'] = 'John';
echo "Session user: " . $_SESSION['user'] . "<br>";
setcookie('site', 'web-final', time()+3600);
echo isset($_COOKIE['site']) ? $_COOKIE['site'] : 'Cookie not set yet'; 