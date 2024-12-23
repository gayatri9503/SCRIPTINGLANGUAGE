<?php
function calculateArea($base, $height, $shape) {
    if ($shape === "triangle") {
        return 0.5 * $base * $height;
    } elseif ($shape === "parallelogram") {
        return $base * $height;
    } else {
        return "Invalid shape";
    }
}

echo "Area of triangle (base: 10, height: 5): " . calculateArea(10, 5, "triangle") . "<br>";
echo "Area of parallelogram (base: 10, height: 5): " . calculateArea(10, 5, "parallelogram") . "<br>";
?>
