
<?php
session_start();

if (isset($_POST['submit'])) {

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['addr'] = $_POST['addr'];
    $_SESSION['mobno'] = $_POST['mobno'];

    header("Location: customersession2.php");
    exit();
}
?>

<h2>Customer Information</h2>

<form method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Address:
    <input type="text" name="addr" required>
    <br><br>

    Mobile No:
    <input type="text" name="mobno" required>
    <br><br>

    <input type="submit" name="submit" value="Next">

</form>

