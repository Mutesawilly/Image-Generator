document.addEventListener("DOMContentLoaded", () => {
    const authorsBios = document.querySelectorAll(".bio-author");
    const images = document.querySelectorAll(".posted-image");

    let bioVisibleIndex = -1; // To track which bio-author section is currently visible

    // Initialize: Hide all bios initially
    authorsBios.forEach(author => {
        author.style.display = "none";
    });

    // Add mouseover, mouseout, and click event listeners to each image
    images.forEach((image, index) => {
        image.addEventListener('mouseover', () => {
            if (bioVisibleIndex !== index) {
                authorsBios[index].style.display = "flex";
            }
        });

        image.addEventListener('mouseout', () => {
            if (bioVisibleIndex !== index) {
                authorsBios[index].style.display = "none";
            }
        });

        image.addEventListener('click', () => {
            if (bioVisibleIndex !== -1) {
                authorsBios[bioVisibleIndex].style.display = "none";
            }
            bioVisibleIndex = index;
            authorsBios[index].style.display = "flex";
        });
    });

    document.body.addEventListener('click', (e) => {
        if (!e.target.classList.contains('posted-image')) {
            if (bioVisibleIndex !== -1) {
                authorsBios[bioVisibleIndex].style.display = "none";
                bioVisibleIndex = -1;
            }
        }
    });
});
