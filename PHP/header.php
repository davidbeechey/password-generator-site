<?php
  session_start(); // Start PHP session
  error_reporting(0); // Turn off error repoprting

  // Redirects the user to the login page if they aren't logged in
  if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
  }
?>
