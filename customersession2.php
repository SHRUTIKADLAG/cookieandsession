
<?php
session_start();

if (isset($_POST['submit'])) {

    $_SESSION['prodname'] = $_POST['prodname'];
    $_SESSION['qty'] = $_POST['qty'];
    $_SESSION['rate'] = $_POST['rate'];

    header("Location: customersession3.php");
    exit();
}
?>

<h2>Product Information</h2>

<form method="post">

    Product Name:
    <input type="text" name="prodname" required>
    <br><br>

    Quantity:
    <input type="number" name="qty" required>
    <br><br>

    Rate:
    <input type="number" name="rate" required>
    <br><br>

    <input type="submit" name="submit" value="Generate Bill">

</form>

