<?php
// start the session
session_start();
// unset all session variables
session_unset();
// destroy the session
session_destroy();
//  redirect to sign-in page
header('Location: sign-in.php');
?>