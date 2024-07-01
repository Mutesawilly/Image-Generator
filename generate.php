<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Generator App</title>
  <link rel="stylesheet" href="generate.css">
</head>
<section>
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
            <p id="prompt-choice">Prompt</p>
          </section>
  
          <section id="prompt-input-container">
            <img src="Icons/icons8-image-24.png" width="50">
            <textarea id="search-term" placeholder="Write your prompt here..."></textarea>
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
            <button id="generate-image">Generate</button>
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
      <section class="generation-page">
        <section class="heading-page">
          <h2 class="logo-name">ImgStock</h2>
          <section class="ess-buttons">
            <img src="icons/Hourglass.gif" alt="Profile Image">
            <button type="button"><img src="icons/icons8-post-50.png" alt="Post"></button>
          </section>
        </section>
        <div id="image-container"></div>
      </section>
    </section>
  

  <script src="generate.js"></script>
</body>
</html>
