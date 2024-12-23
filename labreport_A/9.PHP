<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];

    $totalPoints = ($wins * 3) + ($draws * 1);
    echo "Total points: $totalPoints<br>";
}
?>

<form method="post">
    Wins: <input type="number" name="wins"><br>
    Draws: <input type="number" name="draws"><br>
    Losses: <input type="number" name="losses"><br>
    <input type="submit" value="Calculate">
</form>
