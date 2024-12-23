<?php
function compareStringLengths($str1, $str2) {
    return strlen($str1) === strlen($str2);
}

echo "Comparing 'hello' and 'world': " . (compareStringLengths("hello", "world") ? "True" : "False") . "<br>";
echo "Comparing 'hello' and 'hi': " . (compareStringLengths("hello", "hi") ? "True" : "False") . "<br>";
?>
