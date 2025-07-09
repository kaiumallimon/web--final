<?php
// JSON encode/decode
$arr = ["name" => "John", "age" => 30];
$json = json_encode($arr);
echo "JSON: $json<br>";
$decoded = json_decode($json, true);
echo "Decoded name: " . $decoded['name']; 