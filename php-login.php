<?php

/**
 * Check PHP prerequisites and load common variables, libraries, classes 
 * and functions necessary for php-login script to work properly.
 */

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('libraries/password_compatibility_library.php');
}
// include the config
require_once('config/config.php');

// include the to-be-used language. feel free to translate your project and include something else.
// detection of the language for the current user/browser
$user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// if translation file for the detected language doesn't exist, we use default english file
require_once('translations/' . (file_exists('translations/' . $user_lang . '.php') ? $user_lang : 'en') . '.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the login class
require_once('classes/Login.php');
require_once('classes/Registration.php');
