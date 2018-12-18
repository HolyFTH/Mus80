<?php
unset($_COOKIE['user_ID']);
unset($_COOKIE['username']);
setcookie('user_ID', '', -1, '/');
setcookie('username', '', -1, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
 header('Location: ' . $home_url);
?>