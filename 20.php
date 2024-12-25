<?php
function repeatFrontChars($str) {
    if (strlen($str) < 2) {
        return $str;
    } else {
        $frontChars = substr($str, 0, 2);
        return str_repeat($frontChars, 4);
    }
}

// Test cases
echo repeatFrontChars("C Sharp") . "\n"; // Output: C C C C
echo repeatFrontChars("JS") . "\n";      // Output: JSJSJSJS
echo repeatFrontChars("a") . "\n";       // Output: a
?>
