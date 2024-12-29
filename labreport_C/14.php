<?php
$country = $_GET['country'];

$cities = [
    "USA" => ["New York", "Los Angeles", "Chicago"],
    "India" => ["Delhi", "Mumbai", "Bangalore"],
    "Nepal" => ["Kathmandu", "Pokhara", "Lalitpur"]
];

if (array_key_exists($country, $cities)) {
    foreach ($cities[$country] as $city) {
        echo "<option value='$city'>$city</option>";
    }
} else {
    echo "<option value=''>No cities available</option>";
}
?>
