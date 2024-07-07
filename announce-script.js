// Uploading and Displaying the image
let image_input = document.getElementById("img-container");
let upload_image = "";


// Removing the default image
image_input.addEventListener("input", function() {
  document.getElementById("img-containerers").style.display = "none";
  document.getElementById("spanned").style.display = "";
  document.getElementById("img-containers").style.backgroundColor = "none";
  document.getElementById("img-cont-content").style.display = "none";
});

image_input.addEventListener("change", function() {
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    upload_image = reader.result;
    document.getElementById("img-containers").style.backgroundImage = `url(${upload_image})`;
    console.log(image_input.value);
  });
  reader.readAsDataURL(this.files[0]);
})

// Redirecting the announced image to the post

let submitBtn = document.getElementById("announce-btn");
let first_reading_n = document.getElementById("first_reading_n");
let bio_author = document.getElementById("bio-author");
let announce_btn_a = document.getElementById("announce-btn-second");
let downloadable_images_container = document.getElementById("downloadable-images-container");
let dates = new Date();
let date = dates.toUTCString();



submitBtn.addEventListener("click", function() {
  if (!upload_image) {
    alert("Please Upload The Images!") ;   
  }
  else {
    let html_input = `<section class="first-reading-n">
    <img src=${upload_image} alt="ImgStock Generated Images" class="Image-Uploaded">    
    <p class="upload-date">Uploaded on ${date}</p>   
</section>`;
document.addEventListener('DOMContentLoaded', (upload_image) => {              
first_reading_n.style.backgroundImage = `${upload_image}`;
bio_author.style.display = "flex";
});
downloadable_images_container.innerHTML += html_input;
  }
})