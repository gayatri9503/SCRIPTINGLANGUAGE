<?php
function calculatePower($voltage, $current) {
    return $voltage * $current;
}

echo "Power with voltage 220V and current 5A: " . calculatePower(220, 5) . " watts<br>";
?>
