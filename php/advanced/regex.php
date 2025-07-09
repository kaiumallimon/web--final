<?php
// Regular expressions in PHP
$text = "The rain in Spain";
if (preg_match("/rain/", $text)) {
    echo "Match found!<br>";
}
echo preg_replace("/Spain/", "France", $text); 