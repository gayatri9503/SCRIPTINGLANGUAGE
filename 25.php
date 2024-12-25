<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($info as $key => $value) {
    echo "<tr>";
    echo "<th>" . ucfirst($key) . "</th>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
