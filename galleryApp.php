<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:home.php');
    exit();
}

include("All_In_One.php");

$userId = $_SESSION['id'];
$query = "SELECT Image FROM uploadedimages WHERE userId = '$userId' AND IsGenerated = 1";
$result = mysqli_query($connections, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($connections));
}

$images = [];
while ($row = mysqli_fetch_assoc($result)) {
    $images[] = $row['Image'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realistic, Cartoonistic and Artistic Image Gallery</title>
    <link rel="stylesheet" href="galleryApp.css">
    <link rel="stylesheet" href="buttons-imgStock.css">
</head>
<body>

<section class="heading-page">
    <section class="logo-name"><a href="index.html" class="logo-name"><img src="Icons/icons8-go-back-64.png" width="30" alt="Go Back">
        <h3>ImgStock.AI</h3></a>
    </section>
    <input type="text" id="search" placeholder="Search all types of images in PNG, JPG, JPEG and SVG" class="search-bar">
    <section class="ess-buttons">
        <section class="dropdown-menu">
        <img src="Icons/icons8-help-50 (1).png" alt="Post" class="essential-icons" id="essential-icons">
        <img src="Icons/icons8-user-50.png" alt="Profile Picture" id="essential-icons_1">
        </section>
    </section>
</section>

<section id="downloadable-images-container">
    <section class="image-stocks" id="image-stocks">
        <?php foreach ($images as $imagePath): ?>
        <section class="first-reading-n">
            <img src="<?php echo $imagePath; ?>" alt="Generated Image" class="posted-image">
            <section class="bio-author">
                <section class="pic_authors_name">
                    <img src="Images/testm_1.webp" alt="" class="bio-img">
                    <section class="names-role">
                        <h1 class="authors-name">MUTESA Willy</h1>
                        <p class="authors-role">UI/UX Designer</p>
                    </section>
                </section>
                <a download="<?php echo $imagePath; ?>" href="<?php echo $imagePath; ?>"><button class="read-more">Download</button></a>
            </section>
        </section>
        <?php endforeach; ?>
    </section>
</section>

<script src="galleryApp.js"></script>
</body>
</html>
