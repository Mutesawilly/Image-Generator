<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: home.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['genimage'])) {
    // Assuming you have a database connection established
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "istock-users-credentials";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Loop through the imagesArray to save each image URL to the database
    if (isset($_POST['images'])) {
        foreach ($_POST['images'] as $image_url) {
            $image_url = $conn->real_escape_string($image_url); // Escape any special characters
            $sql = "INSERT INTO uploadedimages (`imageId`, `Image`) VALUES ('{$_SESSION['id']}', '$image_url')";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $conn->close();
}
?>
