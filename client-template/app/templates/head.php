<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Default Configuration -->

    <!-- Page Title -->
    <title> WiserUFBA WoT Gateway - <?= isset($extra_title) ? $extra_title : "Web Config" ?> </title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#df3f3f">
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    <meta name="msapplication-config" content="images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS Reset -->
    <link rel="stylesheet" type="text/css" href="styles/reset-style.css">

    <?php
        /* Get the actual session */
        $session = Session::getInstance();
    ?>

    <!-- Default Color Scheme -->
    <link rel="stylesheet" type="text/css" href="styles/scheme/<?= isset($session->color_scheme) ? $session->color_scheme : "blue" ?>.css">

    <!-- Base CSS -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Color Template -->
    <!--<link rel="stylesheet" type="text/css" href="styles/templates/color1.css">-->
    <link rel="stylesheet" type="text/css" href="styles/templates/dark.css">

    <!-- Basic Include Style -->
    <!--<link rel="stylesheet" type="text/css" href="styles/basic.css">-->

    <!-- Base CSS -->
    <link rel="stylesheet" type="text/css" href="styles/default.css">
</head>
<body>
    <div id="content">
    <!-- END OF HEAD -->
