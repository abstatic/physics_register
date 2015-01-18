<?php

    /***********************************************************************
     * config.php
     *
     * Configures pages.
     **********************************************************************/

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

    // require authentication for most pages
    // if not authenticated, then redirect to login page
    // if (!preg_match("{(?:admission|admin|form)\.php$}", $_SERVER["PHP_SELF"]) && isset($_SESSION["fill"]))
    // {
    //     if (empty($_SESSION["admin"]))
    //     {
    //         redirect("form.php");
    //     }
    // }
?>