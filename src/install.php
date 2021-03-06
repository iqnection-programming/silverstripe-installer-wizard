<?php

/************************************************************************************
 ************************************************************************************
 **                                                                                **
 **  If you can read this text in your browser then you don't have PHP installed.  **
 **  Please install PHP 7.1.0 or higher.                                           **
 **                                                                                **
 ************************************************************************************
 ************************************************************************************/

/**
 * PHP version check. Make sure we've got at least PHP 7.1.0 in the most friendly way possible
 */
if (version_compare(phpversion(), '7.1.0', '<')) {
    header($_SERVER['SERVER_PROTOCOL'] . " 500 Server Error");
    echo str_replace(
        '$PHPVersion',
        phpversion(),
        file_get_contents(__DIR__ . "/php7-required.html")
    );
    die();
}

include(__DIR__ . '/install7.php');