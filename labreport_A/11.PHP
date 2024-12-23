<?php
function isDivisibleByFive($num) {
    return $num % 5 === 0;
}

echo "Is 25 divisible by 5? " . (isDivisibleByFive(25) ? "True" : "False") . "<br>";
echo "Is 26 divisible by 5? " . (isDivisibleByFive(26) ? "True" : "False") . "<br>";
?>
