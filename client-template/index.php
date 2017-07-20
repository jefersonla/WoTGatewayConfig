<?php

/* Require composer autoload */
require_once __DIR__ . '/vendor/autoload.php';

/* Require Session Helper */
require_once "app/helpers/helper_session.php";

/* Get the actual session */
$session = Session::getInstance();

/* Change Page Title */
//$extra_title = "...";

/* Change Active Page */
//$active_{page} = true;

/* Status Message */
$status_menu_active = true;

/* Define Template */
$template_layout = "default";

/* Define View */
$template_view = "home";

/* Include Layout */
require_once "app/layout.php";

?>