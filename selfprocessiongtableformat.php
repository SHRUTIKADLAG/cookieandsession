
<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    echo "<h2>Student Information</h2>";

    echo "<table border='1' cellpadding='10'>";

    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Age</th>";
    echo "<th>Gender</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$age</td>";
    echo "<td>$gender</td>";
    echo "</tr>";

    echo "</table>";

}
else {
?>

<h2>Enter Information</h2>

<form method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Age:
    <input type="number" name="age" required>
    <br><br>

    Gender:

    <input type="radio" name="gender" value="Male" required>
    Male

    <input type="radio" name="gender" value="Female">
    Female

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
}
?>

