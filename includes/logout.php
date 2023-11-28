<?php
//access existing session
session_start();
//remove session variables
session_unset();
// Expire cookies
setcookie('firstname', '', time() - 3600, '/');
setcookie('lastname', '', time() - 3600, '/');
setcookie('username', '', time() - 3600, '/');
setcookie('role', '', time() - 3600, '/');
setcookie('avatar', '', time() - 3600, '/');

//kill the session
session_destroy();
//redirect to login
header('location:../index.php');
exit();
