<?php
function addIfToFront($str) {
    if (substr($str, 0, 2) == "if") {
        return $str;
    } else {
        return "if " . $str;
    }
}

// Test cases
echo addIfToFront("if else") . "\n"; // Output: if else
echo addIfToFront("else") . "\n";    // Output: if else
echo addIfToFront("if") . "\n";      // Output: if
?>

