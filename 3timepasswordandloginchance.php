
<?php
session_start();

if (!isset($_SESSION['chance'])) {
    $_SESSION['chance'] = 0;
}

if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "1234") {

        $_SESSION['login'] = true;

    } else {

        $_SESSION['chance']++;
    }
}

if ($_SESSION['login'] == true) {

    echo "<h2>Welcome</h2>";
    echo "<h3>Welcome to Second Form</h3>";

} elseif ($_SESSION['chance'] >= 3) {

    echo "<h3>Error: You have used all 3 chances.</h3>";

} else {
?>

<form method="post">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" name="submit" value="Login">

</form>

<?php
}
?>

