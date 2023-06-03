<?php
// error_reporting(0);

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1100)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();
    header('Location:./login.php');
    echo "Timeout";	// destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

// // Report runtime errors
 error_reporting(E_ERROR | E_WARNING | E_PARSE);

// // Report all errors
error_reporting(E_ALL);