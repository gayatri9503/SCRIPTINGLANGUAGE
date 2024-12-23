<?php
function absoluteDifference($n) {
    return $n > 51 ? 3 * abs($n - 51) : abs($n - 51);
}

echo "Absolute difference with 45: " . absoluteDifference(45) . "<br>";
echo "Absolute difference with 60: " . absoluteDifference(60) . "<br>";
?>
