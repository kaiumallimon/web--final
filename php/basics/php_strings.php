<?php

$x = " Hello world ";
$y = "hello";
$z = "WORLD";

// --- Basic Info ---
echo "1. Length: " . strlen($x) . "\n";
echo "2. Word Count: " . str_word_count($x) . "\n";

// --- Searching & Position ---
echo "3. Position of 'world': " . strpos($x, "world") . "\n";      // case-sensitive
echo "4. Last position of 'l': " . strrpos($x, "l") . "\n";        // last occurrence
echo "5. Case-insensitive position: " . stripos($x, "WORLD") . "\n";

// --- Substring/slicing ---
echo "6. Substring (6,5): " . substr($x, 6, 5) . "\n";

// --- Replace ---
echo "7. Replace 'world' with 'PHP': " . str_replace("world", "PHP", $x) . "\n";
echo "8. Case-insensitive replace: " . str_ireplace("WORLD", "PHP", $x) . "\n";

// --- Case Manipulation ---
echo "9. Uppercase: " . strtoupper($x) . "\n";
echo "10. Lowercase: " . strtolower($x) . "\n";
echo "11. Ucfirst: " . ucfirst(trim($x)) . "\n";
echo "12. Ucwords: " . ucwords(trim($x)) . "\n";

// --- Trim & Pad ---
echo "13. Trimmed: '" . trim($x) . "'\n";
echo "14. Left Trim: '" . ltrim($x) . "'\n";
echo "15. Right Trim: '" . rtrim($x) . "'\n";
echo "16. Padded: '" . str_pad(trim($x), 20, "*", STR_PAD_BOTH) . "'\n";

// --- Reverse & Repeat ---
echo "17. Reversed: " . strrev($x) . "\n";
echo "18. Repeated (3x): " . str_repeat(trim($x), 3) . "\n";

// --- Compare ---
echo "19. strcmp(y, z): " . strcmp($y, $z) . "\n";                // case-sensitive
echo "20. strcasecmp(y, z): " . strcasecmp($y, $z) . "\n";        // case-insensitive
echo "21. strnatcmp('img12', 'img2'): " . strnatcmp("img12", "img2") . "\n";

// --- Concatenation ---
echo "22. Concatenation: " . $y . " " . $z . "\n";

// --- Split & Join ---
$parts = explode(" ", trim($x));
echo "23. Explode (words): " . implode(", ", $parts) . "\n";
echo "24. Implode with dash: " . implode("-", $parts) . "\n";

// --- Escape Characters ---
echo "25. Addslashes: " . addslashes("John's book") . "\n";
echo "26. Stripslashes: " . stripslashes("John\'s book") . "\n";

// --- HTML ---
$html = "<b>Hello</b> <script>alert('x');</script>";
echo "27. Strip tags: " . strip_tags($html) . "\n";
echo "28. Htmlentities: " . htmlentities($html) . "\n";
echo "29. Htmlspecialchars: " . htmlspecialchars($html) . "\n";

// --- Check Prefix/Suffix ---
echo "30. Starts with ' H': " . (str_starts_with($x, " H") ? "Yes" : "No") . "\n";
echo "31. Ends with 'd ': " . (str_ends_with($x, "d ") ? "Yes" : "No") . "\n";

?>
