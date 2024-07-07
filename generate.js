// Wait for the DOM to load before running the script
document.addEventListener("DOMContentLoaded", () => {
  // Get references to the input field, button, image container, and loading gif
  const genPromptInput = document.getElementById("search-term");
  const generateImageButton = document.getElementById("prompt_gen_button");
  const imageContainer = document.getElementById("images-container");
  const loadingGif = document.getElementById("loading");
  const previousButton = document.getElementById("prev");
  const nextButton = document.getElementById("next");
  const imagesArray = [];
  let i = 0;
  let a = 0;

  // Your Unsplash API key
  const apiKey = 'wafp7KFaS8fPuLnIhkaOp8dSBSYbgtZ302drCEEtth4'; 

  // Function to fetch and display images
  async function fetchAndDisplayImages() {
    const genPrompt = genPromptInput.value;

    // Check if the search term is empty
    if (!genPrompt) {
      alert("Please enter the image description.");
      return;
    }

    // Number of images to fetch
    const numImages = 6;

    // Construct the API URL
    const url = `https://api.unsplash.com/search/photos?query=${encodeURIComponent(genPrompt)}&per_page=${numImages}`;

    try {
      // Show the loading gif
      loadingGif.style.display = 'flex';

      // Fetch data from the Unsplash API
      const response = await fetch(url, {
        headers: {
          Authorization: `Client-ID ${apiKey}`
        }
      });

      // Check if the response is not OK
      if (!response.ok) {
        throw new Error(`Error: ${response.status}`);
      }

      // Parse the JSON response
      const data = await response.json();

      // Clear the image container
      imageContainer.innerHTML = '';

      // Loop through the photos and display each image
      data.results.forEach(photo => {
        const img = document.createElement('img');
        img.src = photo.urls.regular;
        img.alt = genPrompt;
        img.className = "generatedImages";
        imagesArray[i] = img;
        i++;

        fetch('save_image.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            imageUrl: photo.urls.regular,
            altText: genPrompt
          }),
        })
        .then(response => response.json())
        .then(data => {
          console.log(data.message);
        })
        .catch(error => {
          console.error('Error:', error);
        });
      });

        // Creating Images carousel slider

      imageContainer.appendChild(imagesArray[a]);
      console.log(imagesArray);
      previousButton.addEventListener('click', () => {
          a--;
          imageContainer.appendChild(imagesArray[a]);
      });
      nextButton.addEventListener('click', () => {
          a++;
          imageContainer.appendChild(imagesArray[a]);
      });
      
      // Display a message if no images were found
      if (data.results.length === 0) {
        imageContainer.innerHTML = `<p class="Not-found">No images found for "${genPrompt}".</p>`;
      }
    } catch (error) {
      // Log and alert in case of an error
      console.error('Error fetching images:', error);
      alert('Error fetching images. Please try again later.');
    } finally {
      // Hide the loading gif
      loadingGif.style.display = 'none';
    }
  }

  // Add a click event listener to the button
  generateImageButton.addEventListener("click", fetchAndDisplayImages);
});
