const down = document.getElementById("prompt-input-container");
const promptElement = document.getElementById("prompt-choice");
const uploadGenerate = document.getElementById("upload-generate");
const display = document.getElementById("downloadable-images-container");
const imgQuote = document.getElementById("img-containers");
// promptElement.innerHTML = "Prompt";

// function toggleDisplay() {
//   if (promptElement.innerHTML === "Prompt") {
//     down.style.display = "flex";
//     uploadGenerate.style.display = "none";
//     promptElement.innerHTML = "Image";
//   } else {
//     promptElement.innerHTML = "Prompt";
//     down.style.display = "none";
//     uploadGenerate.style.display = "flex";
//   }
// }

// Generate Images using OpenAI API
const API_KEY = "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";
const genPrompt = document.getElementById("prompt");
const submitButton = document.getElementById("submit");

async function imagesGen() {
  const options = {
    method: "POST",
    headers: {
      'Authorization': `Bearer ${API_KEY}`,
      'Content-Type': "application/json"
    },
    body: JSON.stringify({
      "prompt": genPrompt.value,
      "size": "1024x1024",
      "quality": "standard",
      "n": 4
    })
  };

  try {
    const response = await fetch('https://api.openai.com/v1/images/generations', options);
    const imageData = await response.json();

    if (!response.ok) {
      // Check for specific error condition
      if (imageData.error && imageData.error.code === "billing_hard_limit_reached") {
        throw new Error('Billing hard limit has been reached. Please contact support.');
      } else {
        throw new Error('Failed to fetch images');
      }
    }

    console.log(imageData);
    // Handle the image data as needed (e.g., display images)
  } catch (error) {
    console.error('Error generating images:', error.message);
    // Handle the error appropriately (e.g., show an error message to the user)
    alert(error.message); // Display the error message to the user
  }
}

// Event listener for submitting the prompt
submitButton.addEventListener('click', imagesGen);
