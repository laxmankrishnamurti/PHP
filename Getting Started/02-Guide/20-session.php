<?php

# Used to enhance user experience

/**
 * Step :- 01 (Start a session in the command file)
 *    $session_start();
 * Step :- 02 (Create a session_key on any operation)
 *    $_SESSION['key_name'] = "message";
 * Step :- 03 (Use the session_key)
 *    - It is better to create a separate file for all session messages. 
 */

if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}


/**
 * Header is used for redirection
 *  - header("LOCATION: destination")
 */


/**
 * Use the $_SESSION key as middleware for authorization. 
 * Set a $_SESSION key when user logged in successfully and create a middleware and use the session key to redirect the user and avoid unnecessary logged in feature. 
 * Import the middleware file in which we want to restrict the user. 
 * Use the header function to redirect the user if the user is not logge in. 
 */

/**
 * If user explicitly logged out then delete the session key and redirect the user to the login page. 
 * 
 *  - include the session start file;
 *  - session_destroy();
 *  - header("LOCATION: login.php");
 */
