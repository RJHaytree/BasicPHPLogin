<?php

class Login{

    // database connection var
    private $db_connection = null;

    // create array where activity messages are stored
    public $messages = array();

    // create array where error messages are stored
    public $errors = array();

    /**
     *  use the __construct function which automatically starts
     *  whenever the login object is created - in index.php
     *                '$login = new Login();'
     */

    public function __construct(){
        // create session
        session_start();

        // check login options to see which is necessary
        if (isset($_GET['logout'])){
            $this->doUserLogout();
        }
        elseif (isset($_POST["login"])){
            $this->doLoginWithFormData();
        }
    }

    private function doLoginWithFormData(){
        // create database connection object
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // change charset to utf8
        if (!$this->db_connection->set_charset("utf8")){
            $this->errors[] = $this->db_connection->error;
        }

        if (!$this->db_connection->connec_errno){
            // escape POST
            $user_email = $this->db_connection->real_escape_string($_POST['loginEmail']);

            // datbase query to see if the email address actually exists and collect
            // other data needed for the validation process
            $query = "SELECT email, password_hash FROM staff WHERE email = '" . $user_email . "';";
            $login_check_result = $this->db_connection->query($query);

            // if user does exists in table
            if ($login_check_result->num_rows == 1) {

                // get database row as an object to compare password with
                $result_row = $login_check_result->fetch_object();

                // Check password in POST data with password stored in database
                if ($_POST['loginPassword'] == $result_row->password_hash){

                    // write user data to SESSION
                    $_SESSION['user_email'] = $result_row->user_email;
                    $_SESSION['user_login_status'] = 1;

                }
                else {
                    $this->errors[] = "Wrong password. Try again.";
                }
            }
            else {
                $this->errors[] = "This user does not exist.";
            }
        }
        else {
            $this->errors[] = "Database connection problem";
        }
    }

    // perform logout function - clears session
    public function doUserLogout(){
        // delete user session from php server
        $_SESSION = array();
        session_destory();
    }
    // check whether a session for this user is still valid
    public function isSessionValid(){
        if (isset($_SESSION['user_login_status']) == 1){
            return true;
        }
        return false;
    }
}

?>