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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Generator And Stock With Artificial Intelligence!</title>
  <link rel="stylesheet" href="generate.css">
  <link rel="stylesheet" href="buttons-imgStock.css">

</head>

<body>
  <section class="container">
    <section class="side-tools">
      <seciton class="logo-name">
        <a href="index.html"><img src="Icons/icons8-go-back-64 (1).png" width="30"></a>
        <h2>ImgStock.<span>AI</span></h2>
      </seciton>
      <section class="generation">
        <!-- Choose wether you will use uploaded image or prompt... -->
        <section class="choice">
          <p class="qoute-to-capture">Try to generate by </p>
          <p id="prompt-choice" onclick="disp_one()">Prompt</p>
        </section>

        <section id="upload-generate"> <img src="Images/icons8-add-image-48.png" width="80" id="img-containerers">
          <p id="img-cont-content">Click here to <span id="spanned">upload</span> the image </p>
        </section>

        <section id="prompt-input-container">
          <img src="Icons/icons8-image-24.png" width="50">
          <textarea id="prompt" placeholder="Write your prompt here..."></textarea>
        </section>

        <section class="references">
          <section id="ref_1">
            <img src="Images/download (1).jfif" class="img-design">
            <p class="ref-design">Realistic</p>
          </section>
          <section id="ref_1">
            <img src="Images/download (2).jfif" class="img-design">
            <p class="ref-design">Cartoon</p>
          </section>
          <section id="ref_1">
            <img src="Images/images.jfif" class="img-design">
            <p class="ref-design">Artistic</p>
          </section>
        </section>

        <section class="prompt_gen_button">
          <button id="submit" onclick="imagesGen()">Generate</button>
          <p> With ImgStock</p>
        </section>
      </section>

      <section class="important-buttons">
        <a id="sub">History</a>
        <a id="sub">Generations</a>
        <a id="sub">Help</a>
        <a id="submt" href="logout.php">logout</a>
      </section>
    </section>
    <section class="conts">
      <section class="advertsiments-space">
        <section id="ads-images">
          <img src="Images/download (1).jfif" class="ad-image_payed">
          <img src="Images/download (1).jfif" class="ad-image_payed">
          <img src="Images/download (1).jfif" class="ad-image_payed">
          <img src="Images/download (1).jfif" class="ad-image_payed">
          <img src="Images/download (1).jfif" class="ad-image_payed">
        </section>
      </section>
      <section class="heading">
        <section class="ads">
          <section class="img-content">
            <section>
              <div id="img-containers">
                <p>Your Generated Images Will Appear Here...</p>
              </div>
            </section>
          </section>
        </section>
      </section>
    </section>
    <script src="generate.js"></script>
</body>

</html>