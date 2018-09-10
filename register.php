<?php

// load configuration for database
require_once('configuration/config.php');

// load registration class for process
require_once('classes/Registration.php');

// create registration object
$registration = new Registration();

// show user the registration form
include('public/register.php');

?>