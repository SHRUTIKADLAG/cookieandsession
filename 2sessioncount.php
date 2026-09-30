<?php

session_start();

if (isset($_SESSION["visits"])) {
    $_SESSION["visits"]++;
} else {
    $_SESSION["visits"] = 1;
}

echo "Page accessed " . $_SESSION["visits"] . " times";

?>