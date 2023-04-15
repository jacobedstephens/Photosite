window.addEventListener("scroll", function() {
    var scrollingText = document.querySelector(".scrolling-text");
    var bounding = scrollingText.getBoundingClientRect();
    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
      scrollingText.classList.add("animate");
    } else {
      scrollingText.classList.remove("animate");
    }
  });
  // Get the background image element
const backgroundImage = document.querySelector('.background-image');

// Define the speed at which the background image should move
const speed = 5;

// Add a scroll event listener to the window object
window.addEventListener('scroll', function() {
  // Calculate the amount to move the background image based on the scroll position
  const yPos = -1 * window.pageYOffset * speed;

  // Update the transform property of the background image
  backgroundImage.style.transform = `translateY(${yPos}px)`;
});

  