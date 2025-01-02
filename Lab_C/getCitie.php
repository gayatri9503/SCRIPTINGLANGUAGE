<?php
if (isset($_GET['country'])) {
    // Get the country parameter from the URL
    $country = htmlspecialchars($_GET['country'], ENT_QUOTES, 'UTF-8'); // Sanitize input to prevent XSS

    // Sample city data based on country
    $cities = [];

    // Define cities based on country
    if ($country === "India") {
        $cities = ["Delhi", "Mumbai", "Kolkata", "Chennai"];
    } elseif ($country === "USA") {
        $cities = ["New York", "Los Angeles", "Chicago", "Houston"];
    } elseif ($country === "UK") {
        $cities = ["London", "Manchester", "Birmingham", "Leeds"];
    }

    // Set content type to JSON
    header('Content-Type: application/json');
    
    // Return the cities as a JSON response
    echo json_encode($cities);
} else {
    // If no country is provided, return an error message
    header('Content-Type: application/json');
    echo json_encode(["error" => "Country not provided."]);
}
?>
