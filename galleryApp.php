<?php
  session_start();
  if(!$_SESSION['id']){
    header('location:home.php');
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
    <section class="logo-name"><a href="index.html"  class="logo-name"><img src="Icons/icons8-go-back-64.png" width="30" alt="Go Back">
        <h3>ImgStock.AI</h3></a>
</section>
        <input type="text" id="search" placeholder="Search all types of images in PNG, JPG, JPEG and SVG" class="search-bar"></input>
        <!-- <img src="Icons/icons8-search-64.png" alt="Search" id="essential-icons"> -->
    <!-- <p class="captive-heading">Enjoy <span class="web-logo-name">ImgStock.AI</span> Futuristic Images for Free All Day Long!</p> -->
    <section class="ess-buttons">
        <section class="dropdown-menu">
        <img src="Icons/icons8-help-50 (1).png" alt="Post" class="essential-icons" id="essential-icons">
        <img src="Icons/icons8-user-50.png" alt="Profile Picture" id="essential-icons_1">
        </section>
    </section>
</section>

<section id="downloadable-images-container">
    
<section class="image-stocks" id="image-stocks">
    <section class="first-reading-n">
        <img src="Images/TextToImage_37_20240406.jpeg" alt="Uploaded Image" class="posted-image">
        <section class="bio-author">
            <section class="pic_authors_name">
                <img src="Images/testm_1.webp" alt="" class="bio-img">
                <section class="names-role">
                    <h1 class="authors-name">Emmanuel SEMAZA</h1>
                    <p class="authors-role">UI/UX Designer</p>
                </section>
            </section>
            <a download="Images/TextToImage_5_20240406.jpeg" href="Images/TextToImage_37_20240406.jpeg"><button
                    class="read-more">Download</button></a>
        </section>
    </section>

    <section class="first-reading-n">
        <img src="Images/images.jfif" alt="Uploaded Image" class="posted-image">
        <section class="bio-author">
            <section class="pic_authors_name">
                <img src="Images/testm_1.webp" alt="" class="bio-img">
                <section class="names-role">
                    <h1 class="authors-name">MUTESA Willy</h1>
                    <p class="authors-role">UI/UX Designer</p>
                </section>
            </section>
            <a download="Images/TextToImage_5_20240406.jpeg" href="Images/TextToImage_37_20240406.jpeg"><button
                    class="read-more">Download</button></a>
        </section>
    </section>

    <!-- Add more sections as needed -->
</section>
</section>

<script src="galleryApp.js"></script>
<script async src="upload.js"></script>
</body>
</html>
