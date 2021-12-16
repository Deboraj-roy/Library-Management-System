<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// set the expiration date to one hour ago
setcookie("visited", "", time() - 86400);

header("Location: ../view/UserProfile.php");
?>

