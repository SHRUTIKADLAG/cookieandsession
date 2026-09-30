<?php
$font = $_COOKIE["font"];
$size = $_COOKIE["size"];
$color = $_COOKIE["color"];
$bgcolor = $_COOKIE["bgcolor"];
?>

<!DOCTYPE html>
<html>
<body style="
font-family: <?php echo $font; ?>;
font-size: <?php echo $size; ?>;
color: <?php echo $color; ?>;
background-color: <?php echo $bgcolor; ?>;
">

<h1>My Web Page</h1>

<p>The selected settings are applied here.</p>

</body>
</html>