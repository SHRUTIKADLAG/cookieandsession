<?php
session_start();

if (isset($_POST['submit'])) {

    $_SESSION['basic'] = $_POST['basic'];
    $_SESSION['da'] = $_POST['da'];
    $_SESSION['hra'] = $_POST['hra'];

    header("Location: employeesession3.php");
    exit();
}
?>

<h2>Employee Earnings</h2>

<form method="post">

    Basic:
    <input type="number" name="basic" required>
    <br><br>

    DA:
    <input type="number" name="da" required>
    <br><br>

    HRA:
    <input type="number" name="hra" required>
    <br><br>

    <input type="submit" name="submit" value="Next">

</form>