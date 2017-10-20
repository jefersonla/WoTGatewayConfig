<?php

/* Require composer autoload */
require_once __DIR__ . '/vendor/autoload.php';

/* Require Session Helper */
require_once "app/helpers/helper_session.php";

/* Inicia a sessão */
session_start();

/* Check if user is logged in */
if (isset($_SESSION['status_login']) and $_SESSION['status_login'] == 1) {
  header("Location: /home.php");
  exit();
}

/* Do login action */
if ($_POST['user'] == 'root' && $_POST['pass'] == 'wiser2014' ){
  $_SESSION['status_login'] = 1;
  header("Location: /index.php");
  exit();
}
else{
  header("Location: /login.php");
  exit();
}

?>
