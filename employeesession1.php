<?php
session_start();

if (isset($_POST['submit'])) {

    $_SESSION['eno'] = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['address'] = $_POST['address'];

    header("Location: employeesession2.php");
    exit();
}
?>

<h2>Employee Details</h2>

<form method="post">

    Employee No:
    <input type="text" name="eno" required>
    <br><br>

    Employee Name:
    <input type="text" name="ename" required>
    <br><br>

    Address:
    <input type="text" name="address" required>
    <br><br>

    <input type="submit" name="submit" value="Next">

</form>