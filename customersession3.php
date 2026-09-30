
<?php
session_start();

$total = $_SESSION['qty'] * $_SESSION['rate'];
?>

<h2>Customer Bill</h2>

<h3>Customer Information</h3>

Name: <?php echo $_SESSION['name']; ?>
<br><br>

Address: <?php echo $_SESSION['addr']; ?>
<br><br>

Mobile No: <?php echo $_SESSION['mobno']; ?>

<h3>Product Information</h3>

Product Name: <?php echo $_SESSION['prodname']; ?>
<br><br>

Quantity: <?php echo $_SESSION['qty']; ?>
<br><br>

Rate: <?php echo $_SESSION['rate']; ?>
<br><br>

Total: <?php echo $total; ?>

<?php
session_destroy();
?>
