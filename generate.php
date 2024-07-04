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
  <link rel="stylesheet" href="generate.css">
</head>
<body>
  <div class="container">
    <section class="side-tools">

      <section class="generation">
        <section class="choice">
          <p class="quote-to-capture">Try to generate by</p>
          <p id="prompt-choice">Prompt</p>
        </section>
        <section id="prompt-input-container">
          <img src="Icons/icons8-image-24.png" width="50">
          <textarea id="search-term" placeholder="Write your prompt here..."></textarea>
        </section>
        <section class="references">
          <section class="ref-item">
            <img src="Images/download (1).jfif" class="img-design">
            <p class="ref-design">Realistic</p>
          </section>
          <section class="ref-item">
            <img src="Images/download (2).jfif" class="img-design">
            <p class="ref-design">Cartoon</p>
          </section>
          <section class="ref-item">
            <img src="Images/images.jfif" class="img-design">
            <p class="ref-design">Artistic</p>
          </section>
        </section>
        <section class="prompt_gen_button">
          <button id="generate-image">Generate With ImgStock</button>
        </section>
      </section>
      <!-- <section class="important-buttons">
        <a id="sub">History</a>
        <a id="sub" href="generate.php">Generate</a>
        <a id="sub">Help</a>
        <a id="submt" href="logout.php">Logout</a>
      </section> -->
      <p style="color:;">© 2024 Copyrights All Rights Reserved.</p>
    </section>
    <section class="generation-page">
      <section class="heading-page">
      <section class="logo-name">
        <a href="index.html"><img src="Icons/icons8-go-back-64 (1).png" width="30"></a>
        <h2>ImgStock.<span>AI</span></h2>
      </section>
        <section class="ess-buttons">          
          <button type="button" class="essential-icons"><img src="icons/icons8-post-50.png" alt="Post"></button>
          <button type="button" class="essential-icons"><img src="icons/icons8-user-50.png " alt="Profile Image"></button>
        </section>
      </section>
      <div id="image-container"></div>
    </section>
  </div>
  <script src="generate.js"></script>
</body>
</html>
