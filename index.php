<?php

// load database configuration file ready for the construction of
// the login object
require_once('configuration/config.php');

// load login class where the login object will be constructed
require_once('classes/Login.php');

// create new login object
$login = new Login();

// check if user's session is still active, in which case users
// bypass the login process. If a session is not valid, they will
// be sent the login page where they much enter their credentials
// in order to login

if ($login->isSessionValid() == true){
    include('public/logged_in.php');
}
else {
    include('public/log_in.php');
}

?>