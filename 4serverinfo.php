<!DOCTYPE html>
<html>
<body>

<h2>Server Information</h2>

<?php

echo "Client IP Address: " . $_SERVER["REMOTE_ADDR"];
echo "<br>";

echo "Browser Type: " . $_SERVER["HTTP_USER_AGENT"];
echo "<br>";

echo "Host Name: " . $_SERVER["HTTP_HOST"];
echo "<br>";

echo "Request URI: " . $_SERVER["REQUEST_URI"];
echo "<br>";

if (isset($_SERVER["HTTP_REFERER"])) {
    echo "Referring Page: " . $_SERVER["HTTP_REFERER"];
} else {
    echo "Referring Page: Not Available";
}

?>

</body>
</html>