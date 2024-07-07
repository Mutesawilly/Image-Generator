const authorsBios = document.querySelectorAll(".bio-author");
const images = document.querySelectorAll(".first-reading-n");
const searchBar = document.querySelector(".search-bar");
const searchIcon = document.getElementById("essential-icons");

// Initialize: Hide all bios initially
authorsBios.forEach(author => {
    author.style.display = "none";
});

// Add click event listener to each image
images.forEach((image, index) => {
    image.addEventListener('click', () => {
        // Hide all bios
        authorsBios.forEach(author => {
            author.style.display = "none";
        });

        // Show the clicked image's bio
        authorsBios[index].style.display = "flex";
    });
});

// Toggling the search bar function
function search() {
    if(searchBar)
    searchBar.style.display = "flex";
}