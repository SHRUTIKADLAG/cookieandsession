<?php
session_start();

$total = $_SESSION['basic'] + $_SESSION['da'] + $_SESSION['hra'];
?>

<h2>Employee Information</h2>

Employee No: <?php echo $_SESSION['eno']; ?>
<br><br>

Employee Name: <?php echo $_SESSION['ename']; ?>
<br><br>

Address: <?php echo $_SESSION['address']; ?>
<br><br>

Basic: <?php echo $_SESSION['basic']; ?>
<br><br>

DA: <?php echo $_SESSION['da']; ?>
<br><br>

HRA: <?php echo $_SESSION['hra']; ?>
<br><br>

Total: <?php echo $total; ?>

<?php
session_destroy();
?>