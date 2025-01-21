// Function to check if an element is partially visible in the viewport with a threshold
function isElementInViewport(el, threshold = 0.1) {
  const rect = el.getBoundingClientRect();
  const elementHeight = rect.height;
  const elementWidth = rect.width;

  const visibleHeight = Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);
  const visibleWidth = Math.min(rect.right, window.innerWidth) - Math.max(rect.left, 0);

  const visibilityRatio = (visibleHeight * visibleWidth) / (elementHeight * elementWidth);
  return visibilityRatio >= threshold;
}

// Function to add 'visible' class when the element meets the threshold visibility
function handleScrollAnimations() {
  const contactInfo = document.querySelector('.contact-info');
  const contactForm = document.querySelector('.contact-form');
  const mapIframe = document.querySelector('.map-container iframe');

  if (isElementInViewport(contactInfo, 0.1)) {
    contactInfo.classList.add('visible');
  }
  if (isElementInViewport(contactForm, 0.1)) {
    contactForm.classList.add('visible');
  }
  if (isElementInViewport(mapIframe, 0.1)) {
    mapIframe.classList.add('visible');
  }
}

// Call the function on scroll and on page load
window.addEventListener('scroll', handleScrollAnimations);
document.addEventListener('DOMContentLoaded', handleScrollAnimations);

// Initial check to handle page load
handleScrollAnimations();
