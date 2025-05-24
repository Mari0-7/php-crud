const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');
            const menuOverlay = document.querySelector('.menu-overlay');
            
            // Toggle menu
            hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
            });
            
            // Close menu when clicking overlay or links
            menuOverlay.addEventListener('click', closeMenu);
            document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', closeMenu);
            });
            
            function closeMenu() {
            hamburger.classList.remove('active');
            navLinks.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.classList.remove('no-scroll');
            }