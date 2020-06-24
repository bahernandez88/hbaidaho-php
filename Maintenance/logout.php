<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

//Destroy Cookie
setcookie("user", "f", time() - (86400 * 30), "/");
 
// Redirect to login page
header("location: login.php");
exit;
?>