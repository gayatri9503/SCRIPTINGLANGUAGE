<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = $_POST['principal'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];

    $simpleInterest = ($principal * $rate * $time) / 100;
}
?>

<form method="post">
    Principal: <input type="number" name="principal" required><br>
    Rate (%): <input type="number" name="rate" required><br>
    Time (years): <input type="number" name="time" required><br>
    <input type="submit" value="Calculate Interest">
</form>

<?php if (isset($simpleInterest)) { ?>
<p>Simple Interest: <?= $simpleInterest ?></p>
<?php } ?>
