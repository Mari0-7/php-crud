document.addEventListener('DOMContentLoaded', function () {
    // Date picker functionality (simplified)
    const dateInput = document.getElementById('date');
    dateInput.addEventListener('click', function () {
        // In a real implementation, you would show a date picker here
        alert('Date picker would open here');
    });

    // Search button animation
    const searchBtn = document.querySelector('.search-btn');
    searchBtn.addEventListener('click', function () {
        this.style.transform = 'scale(0.95)';
        setTimeout(() => {
            this.style.transform = 'scale(1)';
            alert('Search functionality would be implemented here');
        }, 150);
    });

    // Destination card hover effect (for touch devices)
    const cards = document.querySelectorAll('.destination-card');
    cards.forEach(card => {
        card.addEventListener('touchstart', function () {
            this.classList.add('hover');
        });
        card.addEventListener('touchend', function () {
            this.classList.remove('hover');
        });
    });

    // Testimonial carousel
    const avatars = document.querySelectorAll('.avatar');
    const testimonials = document.querySelectorAll('.testimonial-content');

    avatars.forEach(avatar => {
        avatar.addEventListener('click', function () {
            const index = this.getAttribute('data-index');

            // Reset all avatars and testimonials
            avatars.forEach(a => {
                a.style.transform = '';
                a.style.zIndex = '';
            });

            testimonials.forEach(t => {
                t.classList.remove('active');
            });

            // Set active avatar
            avatar.style.transform = 'translate(-50%, 0) scale(1.5)';
            avatar.style.zIndex = '5';
            avatar.style.left = '50%';

            // Position other avatars
            const prevPrev = avatars[(parseInt(index) - 2 + avatars.length) % avatars.length];
            const prev = avatars[(parseInt(index) - 1 + avatars.length) % avatars.length];
            const next = avatars[(parseInt(index) + 1) % avatars.length];
            const nextNext = avatars[(parseInt(index) + 2) % avatars.length];

            prevPrev.style.transform = 'scale(0.8)';
            prevPrev.style.zIndex = '1';
            prevPrev.style.left = 'calc(50% - 180px)';

            prev.style.transform = 'scale(0.9)';
            prev.style.zIndex = '2';
            prev.style.left = 'calc(50% - 120px)';

            next.style.transform = 'scale(0.9)';
            next.style.zIndex = '2';
            next.style.left = 'calc(50% + 60px)';

            nextNext.style.transform = 'scale(0.8)';
            nextNext.style.zIndex = '1';
            nextNext.style.left = 'calc(50% + 120px)';

            // Show corresponding testimonial
            document.getElementById(`testimonial-${index}`).classList.add('active');
        });
    });

    // Responsive adjustments for window resize
    function handleResize() {
        const width = window.innerWidth;
        if (width < 768) {
            // Mobile adjustments
            document.querySelector('.search-content').style.flexDirection = 'column';
        } else {
            // Desktop adjustments
            document.querySelector('.search-content').style.flexDirection = 'row';
        }
    }
});