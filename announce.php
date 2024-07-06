<?php
session_start();
if(!$_SESSION['id']){
    header('Location: home.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Generator And Stock With Artificial Intelligence!</title>
    <link rel="stylesheet" href="announce-style.css">
</head>
<body>
    <nav>
        <section class="logo-name">
            <a href="index.html"><img src="Icons/icons8-go-back-64 (1).png" width="30" alt="Go Back"></a>
            <h2>ImgStock.AI</h2>
        </section>
        <section class="reading-packages-redirecting-links">
            <ul class="to-pages-links">
                <li class='redirecting-to-pages-link'><a class='redirecting-to-pages-links' href="generate.php">Generate</a></li>
                <li class='redirecting-to-pages-link'><a class='redirecting-to-pages-links'>Gallery</a></li>
                <li class='redirecting-to-pages-link'><a class='redirecting-to-pages-links'>Donate</a></li>
            </ul>
        </section>
        <section class="ess-buttons">
          <img src="Icons/icons8-help-50 (1).png" alt="Post" class="essential-icons">
          <section class="dropdown-menu">
            <img src="Icons/icons8-user-50.png" alt="Profile Picture" class="essential-icons_1">
          </section>
        </section>
    </nav>
    <section class="all-together">
        <section class="container">
            <section>
                <label for="img-container" id="img-containers">
                    <img src="Images/icons8-add-image-48.png" width="100" id="img-containerers">
                    <p id="img-cont-content">Click here to upload the image <span id="spanned">upload</span></p>
                </label>
                <input type="file" accept="image/*" id="img-container">
            </section>
            
            <section class="announces">
                <p class="announce-qoute">Upload Your Image With Only One Click</p>
                <button id="announce-btn" type="file">Announce</button>
            </section>
        </section>
        <div id="side-uploads">
      <h2>Upload History</h2>
      <div id="downloadable-images-container"></div>
    </div>
    </section>
    <script src="announce-script.js"></script>
    <script src="script.js"></script>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="announce-style.css">
  <title>Image Upload Interface</title>
</head>
<body>
  <nav>
    <div class="logo-name">
      <h1>Image Uploader</h1>
    </div>
    <ul class="to-pages-links">
      <li><a href="#" class="redirecting-to-pages-links">Home</a></li>
      <li><a href="#" class="redirecting-to-pages-links">Gallery</a></li>
    </ul>
  </nav>

  <div class="all-together">
    <div class="container">
      <div id="img-containers">
        <input type="file" id="img-container" accept="image/*">
        <span>Upload Image</span>
      </div>
      <div id="waiting-message" class="announce-qoute">Please upload an image</div>
      <button id="announce-btn">Announce Image</button>
      <button id="announce-btn-second">Announce Second</button>
    </div>
    
    <div id="side-uploads">
      <h2>Upload History</h2>
      <div id="downloadable-images-container"></div>
    </div>
  </div>

  <section id="first_reading_n">
    <section id="bio-author">
      <section class="pic_authors_name">
        <img src="Images/testm_1.webp" alt="" class="bio-img">
        <section class="names-role">
          <h1 class="authors-name">Beth Anderson</h1>
          <p class="authors-role">UI/UX Designer</p>
        </section>
      </section>
      <a download=""><button class="read-more">Download</button></a>
    </section>
  </section>

  <script src="announce-script.js"></script>
</body>
</html> -->