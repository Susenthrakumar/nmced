let currentIndex = 0;
const images = document.querySelectorAll('.gallery-table img'); // Select all gallery images
const modal = document.getElementById("modal");
const modalImg = document.getElementById("modalImage");
const captionText = document.getElementById("caption");

// Open the modal and display the clicked image
function openModal(index) {
    currentIndex = index; // Set the current index to the clicked image index
    modal.style.display = "block"; // Show the modal
    updateModalContent(); // Update modal with the correct image and caption
}

// Close the modal
function closeModal() {
    modal.style.display = "none"; // Hide the modal
}

// Change the image when navigating (previous/next)
function changeImage(direction) {
    currentIndex = (currentIndex + direction + images.length) % images.length; // Loop through the images array
    updateModalContent(); // Update modal with the new image and caption
}

// Update modal content (image and caption)
function updateModalContent() {
    const clickedImage = images[currentIndex];
    modalImg.src = clickedImage.src; // Set the modal image source to the clicked image source
    captionText.innerHTML = clickedImage.alt || "No description available"; // Set caption (use alt or fallback)
}

// Attach click event listeners to all images in the gallery
images.forEach((img, index) => {
    img.addEventListener("click", () => openModal(index)); // Add event listener for each image
});

// Keyboard navigation for accessibility
document.addEventListener("keydown", (e) => {
    if (modal.style.display === "block") {
        if (e.key === "ArrowRight") changeImage(1); // Navigate to the next image
        if (e.key === "ArrowLeft") changeImage(-1); // Navigate to the previous image
        if (e.key === "Escape") closeModal(); // Close the modal
    }
});