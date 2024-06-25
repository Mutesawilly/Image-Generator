const down = document.getElementById("prompt-input-container");
const prompt = document.getElementById("prompt-choice");
const upload_generate = document.getElementById("upload-generate");
const display = document.getElementById("downloadable-images-container");
const img_qoute = document.getElementById("img-containers");
prompt.innerHTML = "Prompt";


function disp_one() {
  if(prompt.innerHTML === "Prompt"){
    down.style.display = "flex";
    upload_generate.style.display = "none";
    prompt.innerHTML = "Image";
  } 
  else{
    prompt.innerHTML = "Prompt";
    down.style.display = "none";
    upload_generate.style.display = "flex";
  }
}


// Generate Codes with chatGPT api key are designed fro this page!

const API_KEY = "sk-proj-QxgNVeS046WNr9D2U1TvT3BlbkFJfmSimsM5lldnaGr8O4DD";
const genPrompt = document.getElementById("prompt");
const submitButton = document.getElementById("submit");


 async function imagesGen(){
  alert(genPrompt.value);
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
      "n": 4,
    })
  }
  try{
    const generation = await fetch('https://api.openai.com/v1/images/generations', options);
    const genData = await generation.json();
    console.log(genData);
  }catch(error) {
    console.error(Error);
  }
}