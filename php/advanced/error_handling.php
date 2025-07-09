<?php
// Error handling in PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    throw new Exception('This is an exception!');
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br>";
}

// Custom error handler
function myErrorHandler($errno, $errstr) {
    echo "Custom error: [$errno] $errstr<br>";
}
set_error_handler("myErrorHandler");
echo $undefined_var; // triggers warning 