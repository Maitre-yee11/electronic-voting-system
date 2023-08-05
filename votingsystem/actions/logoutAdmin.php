<?php
session_start();
include('connect.php');

// Unset specific session variables
unset($_SESSION['AId']);
unset($_SESSION['password']);

// Alternatively, you can destroy the entire session
// session_destroy();

// Redirect the user to the login page
header("Location: ../home.php");
exit();
?>