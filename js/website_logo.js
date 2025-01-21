document.addEventListener("DOMContentLoaded", () => {
    const logoSection = document.querySelector(".logo-section");

    const triggerAnimation = () => {
        if (!logoSection.classList.contains("animate")) {
            logoSection.classList.add("animate");
        }
    };

    // Intersection Observer to trigger on scroll
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    triggerAnimation();
                    observer.disconnect(); // Trigger once
                }
            });
        },
        { threshold: 0.5 } // Trigger when 50% of the section is visible
    );

    observer.observe(logoSection);
});
