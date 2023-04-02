<?php
session_start(); // start the session

// check if the 'logout' form has been submitted
if (isset($_POST['logout'])) {
    // unset all of the session variables
    $_SESSION = array();

    // destroy the session
    session_destroy();

    // redirect to the specified URL
    if (isset($_POST['redirect'])) {
        header("Location: ".$_POST['redirect']);
        exit();
    }
}
?>
