// Fade out before page switch
function goTo(url) {
  document.body.classList.add("fade-out");
  setTimeout(() => {
    window.location.href = url;
  }, 500); // match animation duration
}

// Apply fade-in on load
window.addEventListener("DOMContentLoaded", () => {
  document.body.classList.add("fade-in");
});
