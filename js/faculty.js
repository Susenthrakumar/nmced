// Animate cards with delay
function animateCardsWithDelay(entries, observer) {
    let delay = 0;

    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            // Add 'visible' class with a delay
            setTimeout(() => {
                entry.target.classList.add('visible');
            }, delay);
            delay += 300; // Delay increment for each card (in milliseconds)

            // Unobserve the card after it has been animated
            observer.unobserve(entry.target);
        }
    });
}

// Set up Intersection Observer with a threshold of 0.8 (20% of element visible)
const observerOptions = {
    root: null, // Use the viewport as the root
    rootMargin: '0px',
    threshold: 0.5, // Trigger when 20% of the element is visible
};

const observer = new IntersectionObserver(animateCardsWithDelay, observerOptions);

// Observe all faculty cards
const cards = document.querySelectorAll('.faculty-card');
cards.forEach((card) => observer.observe(card));
