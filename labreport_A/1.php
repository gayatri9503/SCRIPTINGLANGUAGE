<?php
// Variables with different data types
$integer = 10;
$float = 20.5;
$string = "Hello, PHP!";
$array = array(1, 2, 3);
$boolean = true;

// a. Print all data using echo and print
echo "Integer: $integer<br>";
print "Float: $float<br>";
echo "String: $string<br>";
print "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";

// b. Display array content using print_r and var_dump
echo "Array using print_r: ";
print_r($array);
echo "<br>Array using var_dump: ";
var_dump($array);
echo "<br>";

// c. Display result of checking data types
echo "Type of Integer: " . gettype($integer) . "<br>";
echo "Type of Float: " . gettype($float) . "<br>";
echo "Type of String: " . gettype($string) . "<br>";
echo "Type of Boolean: " . gettype($boolean) . "<br>";
?>
