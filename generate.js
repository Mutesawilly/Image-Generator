    // Wait for the DOM to load before running the script
    document.addEventListener("DOMContentLoaded", () => {
      // Get references to the input field, button, image container, and loading gif
      const genPromptInput = document.getElementById("search-term");
      const generateImageButton = document.getElementById("prompt_gen_button");
      const imageContainer = document.getElementById("image-container");
      const loadingGif = document.getElementById("loading");

      // Your Pexels API key
      const apiKey = '7c8tMGoinkcIx4gzPQxiLdmaeeTgeI9Rr7iq1S18GAsOMPygZU6NXpPp'; 

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
        const url = `https://api.pexels.com/v1/search?query=${encodeURIComponent(genPrompt)}&per_page=${numImages}`;

        try {
          // Show the loading gif
          loadingGif.style.display = 'block';

          // Fetch data from the Pexels API
          const response = await fetch(url, {
            headers: {
              Authorization: apiKey
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
          data.photos.forEach(photo => {
            const img = document.createElement('img');
            img.src = photo.src.large;
            img.alt = genPrompt;
            imageContainer.appendChild(img);
          });

          // Display a message if no images were found
          if (data.photos.length === 0) {
            imageContainer.innerHTML = `<p>No images found for "${genPrompt}".</p>`;
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