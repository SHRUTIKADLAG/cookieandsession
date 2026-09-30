
<?php

if (isset($_POST['submit'])) {

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];

    $folder = "uploads/" . $filename;

    if (move_uploaded_file($tempname, $folder)) {

        echo "<h3>Image Uploaded Successfully</h3>";

        echo "<img src='$folder' width='300' height='300'>";

    } else {

        echo "Image upload failed.";
    }

}
else {
?>

<h2>Upload Image</h2>

<form method="post" enctype="multipart/form-data">

    Select Image:
    <input type="file" name="image" accept="image/*" required>
    <br><br>

    <input type="submit" name="submit" value="Upload">

</form>

<?php
}
?>

