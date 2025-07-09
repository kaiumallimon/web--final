<?php
// File handling in PHP
$filename = 'sample.txt';

// Write to file
file_put_contents($filename, "Hello, file!\n");

// Append to file
file_put_contents($filename, "Appended line.\n", FILE_APPEND);

// Read file
$content = file_get_contents($filename);
echo nl2br($content); 