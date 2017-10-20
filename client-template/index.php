<?php

/* Require composer autoload */
require_once __DIR__ . '/vendor/autoload.php';

/* Inicia a sessão */
session_start();

/* Check if user is logged in */
if (isset($_SESSION['status_login']) and $_SESSION['status_login'] == 1) {
  /* Redirects to setup */
  header("Location: /setup.php");
  exit();
}

/* Redirect to login page */
header("Location: /login.php");
exit();

?>
