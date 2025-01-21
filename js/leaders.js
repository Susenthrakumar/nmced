    // JavaScript for Fade-In Animation
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = document.querySelectorAll('.fade-in');
    
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Stop observing once the animation is applied
                    }
                });
            },
            { threshold: 0.1 } // Trigger animation when 10% of the element is visible
        );
    
        animatedElements.forEach(element => {
            observer.observe(element);
        });
    });
    