document.addEventListener("DOMContentLoaded", function () {
  const footer = document.querySelector("footer");
  const footerBottom = document.querySelector(".footer-bottom");

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        footer.classList.add("slide-up");
        footerBottom.classList.add("fade-in");

        // Stop observing once triggered
        observer.unobserve(footer);
      }
    },
    {
      threshold: 0.2,
    }
  );

  observer.observe(footer);
});
