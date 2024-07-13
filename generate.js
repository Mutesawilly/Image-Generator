document.addEventListener("DOMContentLoaded", () => {
  const genPromptInput = document.getElementById("search-term");
  const generateImageButton = document.getElementById("generate-image");
  const imageContainer = document.getElementById("images-container");
  const loadingGif = document.getElementById("loading");
  const previousButton = document.getElementById("prev");
  const nextButton = document.getElementById("next");
  const saveButton = document.getElementById("save");
  const imagesArray = [];
  let currentIndex = 0;

  const apiKey = 'wafp7KFaS8fPuLnIhkaOp8dSBSYbgtZ302drCEEtth4';

  async function fetchAndDisplayImages() {
    const genPrompt = genPromptInput.value;

    if (!genPrompt) {
      alert("Please enter the image description.");
      return;
    }

    const numImages = 6;
    const url = `https://api.unsplash.com/search/photos?query=${encodeURIComponent(genPrompt)}&per_page=${numImages}`;

    try {
      loadingGif.style.display = 'flex';

      const response = await fetch(url, {
        headers: {
          Authorization: `Client-ID ${apiKey}`
        }
      });

      if (!response.ok) {
        throw new Error(`Error: ${response.status}`);
      }

      const data = await response.json();
      imageContainer.innerHTML = '';
      imagesArray.length = 0;

      data.results.forEach(photo => {
        const img = document.createElement('img');
        img.src = photo.urls.regular;
        img.alt = genPrompt;
        img.id = "generatedImages";
        imagesArray.push(img);
      });

      if (imagesArray.length > 0) {
        imageContainer.appendChild(imagesArray[currentIndex]);

        previousButton.addEventListener('click', () => {
          if (currentIndex > 0) {
            currentIndex--;
            imageContainer.innerHTML = '';
            imageContainer.appendChild(imagesArray[currentIndex]);
          }
        });

        nextButton.addEventListener('click', () => {
          if (currentIndex < imagesArray.length - 1) {
            currentIndex++;
            imageContainer.innerHTML = '';
            imageContainer.appendChild(imagesArray[currentIndex]);
          }
        });
      } else {
        imageContainer.innerHTML = `<p class="Not-found">No images found for "${genPrompt}".</p>`;
      }
    } catch (error) {
      console.error('Error fetching images:', error);
      alert('Error fetching images. Please try again later.');
    } finally {
      loadingGif.style.display = 'none';
    }
  }

  
  // Inside fetchAndDisplayImages function after imagesArray is populated
saveButton.addEventListener("click", () => {
  const imagesToSave = imagesArray.map(img => img.src);
  const formData = new FormData();
  formData.append('genimage', 'true');
  formData.append('images', JSON.stringify(imagesToSave));

  fetch('save_image.php', {
      method: 'POST',
      body: formData
  })
  .then(response => {
      if (!response.ok) {
          throw new Error('Error saving images.');
      }
      alert('All images have been saved to the database.');
  })
  .catch(error => {
      console.error('Error saving images:', error);
      alert('Error saving images. Please try again later.');
  });
});


  // function saveAllImages() {
  //   const savedImages = imagesArray.map(img => img.src);
  //   localStorage.setItem('savedImages', JSON.stringify(savedImages));
  //   alert('All images have been saved to local storage.');
  // }

  generateImageButton.addEventListener("click", fetchAndDisplayImages);
  // saveButton.addEventListener("click", saveAllImages);
});
