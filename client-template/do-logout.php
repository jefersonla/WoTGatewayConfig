<?php

/* Require composer autoload */
require_once __DIR__ . '/vendor/autoload.php';

/* Require Session Helper */
require_once "app/helpers/helper_session.php";

/* Get the actual session */
$session = Session::getInstance();

/* Destroy the previous session created */
session_start();
$_SESSION = array();
session_destroy();
header("Location: /login.php");
exit();

?>
