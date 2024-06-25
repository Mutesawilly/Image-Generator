<?php
  session_start();
  if(!$_SESSION['id']){
    header('location:home.php');
  }
  ?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Image Generator And Stock With Artificial Intelligence!</title>
  <link href="announce-style.css" rel="stylesheet" type="text/css" />
  <script src="script.js"></script>
</head>

<body>
  <nav>
    <section class="our-webs-name">
      <a href="index.html" class="web-logo-read">Home</a>
    </section>
    <section class="reading-packages-redirecting-links">
      <ul class="to-pages-links">
        <li class='redirecting-to-pages-link'><button class='redirecting-to-pages-links'>Vidoes</button>
        </li>
        <li class='redirecting-to-pages-link'><button class='redirecting-to-pages-links'>Images</button>
        <li class='redirecting-to-pages-link'><button class='redirecting-to-pages-links'>Icons</button>
        </li>
        <li class='redirecting-to-pages-link'><button class='redirecting-to-pages-links'>Audios</button>
        </li>
      </ul>
    </section>
    <section class="sett-prof">
      <!-- <a href="#" class="search-icon"><button class="search-icon"><img src="Icons/icons8-search-64 (1).png"
            class="search-icon"></button></a> -->
      <button class="login-signup">Share</button>
      <a href="#" class="profile-icon"><button class="profile-icon"><img src="Icons/icons8-test-account-32.png"
            class="profile-icon"></button></a>
    </section>
  </nav>
  <section class="all-together">
    <section class="container">
      <section>
        <label for="img-container" id="img-containers"> <img src="Images/icons8-add-image-48.png" width="100"
            id="img-containerers">
          <p id="img-cont-content">Click here to upload the image <span id="spanned">upload</span></p>
        </label>
        <input type="file" accept="image/*" id="img-container">
      </section>

      <section class="announces">
        <p class="announce-qoute">Upload Your Image With Only One Click</p>
        <button id="announce-btn" type="file">Announce</button>

      </section>
    </section>
    <section id="side-uploads">
      <section id="first_reading_n">
        <h1 id="waiting-message">Your Images Will Appear Here!</h1>
        <section id="bio-author">
          <section class="pic_authors_name">
            <img src="Images/testm_1.webp" alt="" class="bio-img">
            <section class="names-role">
              <h1 class="authors-name">Beth Anderson</h1>
              <p class="authors-role">UI/UX Designer</p>
            </section>
          </section>
          <a download="${upload_image}" href="${upload_image}"><button class="read-more"><img
                src="/Icons/icons8-download-48.png" alt="download button" width="25"></button></a>
        </section>
      </section>

      <button id="announce-btn-second" type="file">Publish</button>
    </section>

  </section>

  <script src="announce-script.js"></script>
</body>

</html>