        document.addEventListener('DOMContentLoaded', function() {
            // Image Gallery
            const galleryContainer = document.querySelector('.gallery-container');
            const dots = document.querySelectorAll('.gallery-dot');
            const prevBtn = document.querySelector('.gallery-prev');
            const nextBtn = document.querySelector('.gallery-next');
            const totalSlides = document.querySelectorAll('.gallery-item').length;
            let currentIndex = 0;
            
            function updateGallery() {
                galleryContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
                
                // Update active dot
                dots.forEach(dot => dot.classList.remove('active'));
                dots[currentIndex].classList.add('active');
            }
            
            // Event listeners for dots
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    currentIndex = parseInt(this.getAttribute('data-index'));
                    updateGallery();
                });
            });
            
            // Event listeners for arrows
            prevBtn.addEventListener('click', function() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
                updateGallery();
            });
            
            nextBtn.addEventListener('click', function() {
                currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
                updateGallery();
            });
            
            // Auto-slide
            setInterval(function() {
                currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
                updateGallery();
            }, 5000);
            
            // Mobile menu toggle
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navLinks = document.querySelector('.nav-links');
            
            mobileMenuBtn.addEventListener('click', function() {
                navLinks.classList.toggle('hidden');
            });
        
            
            // Hover effect for gallery
            const imageGallery = document.querySelector('.image-gallery');
            
            imageGallery.addEventListener('mouseenter', function() {
                prevBtn.style.opacity = '1';
                nextBtn.style.opacity = '1';
            });
            
            imageGallery.addEventListener('mouseleave', function() {
                prevBtn.style.opacity = '0.7';
                nextBtn.style.opacity = '0.7';
            });
        });