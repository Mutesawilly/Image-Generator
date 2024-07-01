// Wait for the DOM to load before running the script
document.addEventListener("DOMContentLoaded", () => {
  // Get references to the input field, button, and image container
  const searchTermInput = document.getElementById("search-term");
  const generateImageButton = document.getElementById("generate-image");
  const imageContainer = document.getElementById("image-container");

  // Your Pexels API key
  const apiKey = '7c8tMGoinkcIx4gzPQxiLdmaeeTgeI9Rr7iq1S18GAsOMPygZU6NXpPp'; // Replace with your Pexels API Key

  // Function to fetch and display an image
  async function fetchAndDisplayImage() {
    const searchTerm = searchTermInput.value;

    // Check if the search term is empty
    if (!searchTerm) {
      alert("Please enter a search term.");
      return;
    }

    // Construct the API URL
    const url = `https://api.pexels.com/v1/search?query=${encodeURIComponent(searchTerm)}&per_page=1`;

    try {
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

      // Get the image URL from the response data
      const imageUrl = data.photos[0]?.src.large;

      // Display the image or a message if no image was found
      if (imageUrl) {
        imageContainer.innerHTML = `<img src="${imageUrl}" alt="${searchTerm}">`;
      } else {
        imageContainer.innerHTML = `<p>No images found for "${searchTerm}".</p>`;
      }
    } catch (error) {
      // Log and alert in case of an error
      console.error('Error fetching image:', error);
      alert('Error fetching image. Please try again later.');
    }
  }

  // Add a click event listener to the button
  generateImageButton.addEventListener("click", fetchAndDisplayImage);
});
