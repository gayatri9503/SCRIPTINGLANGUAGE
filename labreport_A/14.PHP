<?php
function findStringIndex($arr, $str) {
    return array_search($str, $arr);
}

$array = ["apple", "banana", "cherry"];
echo "Index of 'banana': " . findStringIndex($array, "banana") . "<br>";
?>
