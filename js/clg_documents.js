document.addEventListener("DOMContentLoaded", () => {
    // Select all buttons
    const buttons = document.querySelectorAll(".button");

    // Create the intersection observer
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add 'visible' class to trigger animation
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target); // Stop observing once triggered
                }
            });
        },
        { threshold: 0.9 } // Trigger when 50% of the button is visible
    );

    // Observe each button
    buttons.forEach(button => {
        observer.observe(button);
    });
});
