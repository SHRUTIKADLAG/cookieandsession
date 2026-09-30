<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form method="post">

Username:
<input type="text" name="username"
       value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
<br><br>

Email:
<input type="text" name="email"
       value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
<br><br>

<input type="submit" name="submit" value="Submit">

</form>

<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];

    // Username validation
    if (!preg_match("/^[A-Za-z0-9_]{3,20}$/", $username)) {

        echo "<p style='color:red'>
        Invalid username. Use 3-20 letters, numbers or underscore only.
        </p>";

    }

    // Email validation
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "<p style='color:red'>
        Invalid email address.
        </p>";

    }

    // If both are valid
    else {

        echo "<h3 style='color:green'>Form submitted successfully!</h3>";

        echo "Username: " . $username;
        echo "<br>Email: " . $email;
    }
}

?>

</body>
</html>