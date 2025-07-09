<?php

// Original values
$intValue = 10;
$floatValue = 7.89;
$stringValue = "123.45abc";
$boolValue = true;

// 1. Float to int
$castedInt = (int)$floatValue;
echo "Float to int: $floatValue → $castedInt\n"; // Output: 7

// 2. String to float
$castedFloat = (float)$stringValue;
echo "String to float: $stringValue → $castedFloat\n"; // Output: 123.45

// 3. String to int
$castedIntFromString = (int)$stringValue;
echo "String to int: $stringValue → $castedIntFromString\n"; // Output: 123

// 4. Int to string
$castedString = (string)$intValue;
echo "Int to string: $intValue → '$castedString'\n"; // Output: '10'

// 5. Bool to int
$castedIntFromBool = (int)$boolValue;
echo "Bool to int: true → $castedIntFromBool\n"; // Output: 1

// 6. Int to bool
$castedBool = (bool)0; // false if 0, true otherwise
echo "Int 0 to bool → " . ($castedBool ? "true" : "false") . "\n"; // Output: false

?>
