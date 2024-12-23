<?php
function getValueByIndex($arr, $index) {
    return $arr[$index] ?? "Invalid index";
}

$array = ["apple", "banana", "cherry"];
echo "Value at index 1: " . getValueByIndex($array, 1) . "<br>";
?>
