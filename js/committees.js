// JavaScript for Animating Committee Table
document.addEventListener('DOMContentLoaded', () => {
    const committeeCells = document.querySelectorAll('.committee-table td');

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-cell');
                    observer.unobserve(entry.target); // Stop observing after animation
                }
            });
        },
        { threshold: 0.4 } // Start animation when 20% of the element is visible
    );

    committeeCells.forEach(cell => {
        observer.observe(cell);
    });
});


