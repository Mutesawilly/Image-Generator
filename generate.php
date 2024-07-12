<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Generator App</title>
  <link rel="stylesheet" href="generate.css">
</head>
<body>
  <div class="container">
    <section class="side-tools">
      <section class="choice">
        <p class="quote-to-capture">Generate unique and stunning</p>
        <span id="prompt-choice">Images!</span>
      </section>
      <section id="prompt-input-container">
        <img src="icons/icons8-image-24.png" width="50" alt="">
        <textarea id="search-term" placeholder="Write your prompt here..."></textarea>
      </section>
      <section class="generation">
        <p class="image-resolution-label">Choose your image resolution:</p>
        <section class="references">
          <section class="ref-item">
            <img src="Images/download (1).jfif" class="img-design" alt="Realistic">
            <p class="ref-design">Realistic</p>
          </section>
          <section class="ref-item">
            <img src="Images/download (2).jfif" class="img-design" alt="Cartoon">
            <p class="ref-design">Cartoon</p>
          </section>
          <section class="ref-item">
            <img src="Images/images.jfif" class="img-design" alt="Artistic">
            <p class="ref-design">Artistic</p>
          </section>
        </section>   
      </section>    
      <section class="btns">      
        <section id="prompt_gen_button">
          <button id="generate-image"><img id="loading" src="icons/Hourglass.gif" alt="Loading...">Generate</button>
        </section>
        <a class="important-buttons" href="logout.php">
          <img src="icons/icons8-logout-64.png" width="35" alt="">
          <p id="submt">Logout</p>
        </a>           
      </section>
    </section>
    <section class="generation-page">
      <section class="heading-page">
        <section class="logo-name">
          <a href="index.html"><img src="Icons/icons8-go-back-64 (1).png" width="30" alt="Go Back"></a>
          <h2>ImgStock.<span>AI</span></h2>
        </section>
        <section class="ess-buttons">
          <img src="Icons/icons8-help-50 (1).png" alt="Post" class="essential-icons">
          <section class="dropdown-menu">
            <img src="Icons/icons8-user-50.png" alt="Profile Picture" class="essential-icons_1">
          </section>
        </section>
      </section>
      <div id="image-container">
        <button id="prev"><img src="icons/icons8-back-26.png" alt="Previous button"></button>
        <div class="images-container" id="images-container"></div>
        <button id="next"><img src="icons/icons8-forward-26.png" alt="Next button"></button>
      </div>
      <form class="save-or-not">
        <button class="save" id="save" onclick="sendingImages()" name='genimage'>Save All</button>
        <button class="continue">Continue</button>
      </form>
      <p class="footer-text">© 2024 Copyrights MUTESA-WILLY All Rights Reserved.</p>
    </section>
  </div>
  <script async src="generate.js"></script>
  <script async src="upload.js"></script>
</body>
</html>
