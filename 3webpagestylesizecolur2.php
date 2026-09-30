<?php

setcookie("font", $_POST["font"], time() + 3600);
setcookie("size", $_POST["size"], time() + 3600);
setcookie("color", $_POST["color"], time() + 3600);
setcookie("bgcolor", $_POST["bgcolor"], time() + 3600);

?>

<!DOCTYPE html>
<html>
<body>

<h2>Selected Settings</h2>

<p>Font Style: <?php echo $_POST["font"]; ?></p>
<p>Font Size: <?php echo $_POST["size"]; ?></p>
<p>Font Color: <?php echo $_POST["color"]; ?></p>
<p>Background Color: <?php echo $_POST["bgcolor"]; ?></p>

<a href="3webpagestylesizecolur3.php">Go to Next Page</a>

</body>
</html>