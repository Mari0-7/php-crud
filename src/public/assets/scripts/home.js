// Mobile Menu Toggle
const mobileMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');

mobileMenu.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Scroll Effects
const header = document.querySelector('header');
const fadeElements = document.querySelectorAll('.fade-in');

window.addEventListener('scroll', () => {
    // Header effect
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    // Fade in elements
    fadeElements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;

        if (elementPosition < screenPosition) {
            element.classList.add('visible');
        }
    });
});

// Form Submission
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(contactForm);
    const formEntries = Object.fromEntries(formData.entries());

    // Simulate form submission
    alert('Thank you for your message! We will contact you soon.');
    contactForm.reset();
});

// Smooth Scrolling for Navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            // Close mobile menu if open
            mobileMenu.classList.remove('active');
            navLinks.classList.remove('active');

            window.scrollTo({
                top: targetElement.offsetTop - 70,
                behavior: 'smooth'
            });
        }
    });
});

// Initialize fade effects on page load
window.addEventListener('load', () => {
    // Trigger scroll event to show elements in viewport on load
    window.dispatchEvent(new Event('scroll'));
});