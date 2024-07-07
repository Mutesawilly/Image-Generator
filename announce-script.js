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



submitBtn.addEventListener("click", function() {
  if (!upload_image) {
    alert("Please Upload The Images!") ;   
  }
  else {
    let html_input = `<section class="first-reading-n">
    <section class="bio-author">
        <section class="pic_authors_name">
            <img src="Images/testm_1.webp" alt="" class="bio-img">
            <section class="names-role">
                <h1 class="authors-name">Beth Anderson</h1>
                <p class="authors-role">UI/UX Designer</p>
            </section>
        </section>
        <a download="ImgStock Generated Images" href=${upload_image}>
            <img src="icons/icons8-downloading-updates-48.png" alt="Download" width="35"></a>
    </section>
    <img src=${upload_image} alt="ImgStock Generated Images" class="Image-Uploaded">    
</section>`;
document.addEventListener('DOMContentLoaded', (upload_image) => {              
first_reading_n.style.backgroundImage = `${upload_image}`;
bio_author.style.display = "flex";
});
downloadable_images_container.innerHTML += html_input;
  }
})