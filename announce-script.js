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


submitBtn.addEventListener("click", function() {
  first_reading_n.style.backgroundImage = `url(${upload_image})`;
  if (upload_image) {
    announce_btn_a.style.display = "flex";
    document.getElementById("waiting-message").style.display = "none";
    bio_author.style.display = "flex";
    first_reading_n.style.display = "block";
  }
  else {
    document.getElementById("waiting-message").style.display = "flex";
  }
})

function displingOthers() {
  bio_author.style.display = "flex";
}

// Image posting and searching functions with javascript

// let html_input = `<section class="first-reading-n">
//                 <section class="bio-author">
//                     <section class="pic_authors_name">
//                         <img src="Images/testm_1.webp" alt="" class="bio-img">
//                         <section class="names-role">
//                             <h1 class="authors-name">Beth Anderson</h1>
//                             <p class="authors-role">UI/UX Designer</p>
//                         </section>
//                     </section>
//                     <a download="${upload_image}" href="${upload_image}"><button
//                             class="read-more">Download</button></a>
//                 </section>
//             </section>`;

// let announce_btn_second = document.getElementById("announce-btn-second");
// let downloadable_images_container = document.getElementById("downloadable-images-container");

// announce_btn_second.addEventListener("click", function() {
//   console.log(html_input);
//   downloadable_images_container.innerHTML += html_input;
// });