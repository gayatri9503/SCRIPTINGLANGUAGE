<?php
function computeSum($a, $b) {
    return $a === $b ? 3 * ($a + $b) : $a + $b;
}

echo "Sum of 5 and 5: " . computeSum(5, 5) . "<br>";
echo "Sum of 5 and 10: " . computeSum(5, 10) . "<br>";
?>
