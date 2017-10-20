<?php

/* Require composer autoload */
require_once __DIR__ . '/vendor/autoload.php';

/* Require Session Helper */
require_once "app/helpers/helper_session.php";

/* Inicia a sessão */
session_start();

/* Check if user is logged in */
if (!isset($_SESSION['status_login']) or !$_SESSION['status_login'] == 1) {
  header("Location: /login.php");
  exit();
}

/* Change Page Title */
//$extra_title = "...";

/* Change Active Page */
//$active_{page} = true;

/* Status Message */
$status_menu_active = true;

/* Define Template */
$template_layout = "default";

/* Define View */
$template_view = "status_common";

/* Include Layout */
require_once "app/layout.php";

?>
