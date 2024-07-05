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
  <title>Image Generator App</title>
  <link rel="stylesheet" href="generate.css?=filemtime(ASSETS_BASE_DIR.'/f/css/lightbox.css')?>">
</head>
<body>
  <div class="container">
    <section class="side-tools">
      <section class="generation">
        <section class="choice">
          <p class="quote-to-capture">Try to generate by</p>
          <p id="prompt-choice">Prompt</p>
        </section>
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
        <section class="prompt_gen_button">
          <button id="generate-image">Generate With ImgStock</button>
        </section>
      </section>
      <p class="footer-text">© 2024 Copyrights MW All Rights Reserved.</p>
    </section>
    <section class="generation-page">
      <section class="heading-page">
        <section class="logo-name">
          <a href="index.html"><img src="Icons/icons8-go-back-64 (1).png" width="30" alt="Go Back"></a>
          <h2>ImgStock.<span>AI</span></h2>
        </section>
        <section class="ess-buttons">
          <img src="Icons/icons8-post-50.png" alt="Post" class="essential-icons">
          <section class="dropdown-menu">
            <img src="Icons/icons8-user-50.png" alt="Profile Picture" class="essential-icons_1">
            <section class="important-buttons">
              <a id="sub" href="#">History</a>
              <a id="sub" href="generate.php">Generate</a>
              <a id="sub" href="#">Help</a>
              <a id="submt" href="logout.php">Logout</a>
            </section>
          </section>
        </section>
      </section>
      <div id="image-container"></div>
      <section id="prompt-input-container">
          <img src="Icons/icons8-image-24.png" width="55" alt="Icon">
          <textarea id="search-term" placeholder="Write your prompt here..."></textarea>
        </section>
    </section>
  </div>
  <script src="generate.js"></script>
</body>
</html>