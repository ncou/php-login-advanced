<?php

// load php-login components
require_once("php-login.php");

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();

// showing the register view (with the registration form, and messages/errors)
include("views/register.php");
