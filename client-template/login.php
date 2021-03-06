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

/* Change Page Title */
$extra_title = "Login WoT Config";

/* Define Template */
$template_layout = "clean";

/* Define View */
$template_view = "login";

/* Include Layout */
require_once "app/layout.php";

?>
