<?php
// Superglobals examples
// $_GET
// $_POST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_FILES
// $_ENV
// $_REQUEST

// Example usage:
echo "<h3>
_GET example (use ?name=John in URL): ";
echo isset($_GET['name']) ? $_GET['name'] : 'No name in GET';
echo "</h3>";

// _SERVER example
echo "<p>Server name: " . $_SERVER['SERVER_NAME'] . "</p>";

// _COOKIE example
setcookie('test', 'cookie_value', time()+3600);
echo isset($_COOKIE['test']) ? $_COOKIE['test'] : 'Cookie not set yet';

// _POST, _SESSION, _FILES, _ENV, _REQUEST would require forms or session_start, see docs for more. 