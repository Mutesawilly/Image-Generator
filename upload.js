function sendingImages(){

    const generatedImage = document.getElementById("generatedImages");
    const imagesArray = [];
    let imageCount = 1;
    let a = 0;
    let i = 0;

    for(let a = 0; a <= imagesArray.length; a++){
        localStorage.setItem("Image" + imageCount, generatedImage);
    }
    for(let i = 0; i <= imagesArray.length; i++){
        const toBeSentImage = localStorage.getItem("Image" + imageCount, generatedImage);
        document.getElementById("image-stocks").appendChild(toBeSentImage);
    }

    return;
}