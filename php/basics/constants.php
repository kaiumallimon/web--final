<?php
# Constants are automatically global and
# can be used across the entire script.
define('GREETING', 'Welcome to PHP');

// echo GREETING;


function greet(){
  echo GREETING;
}

greet()
?>