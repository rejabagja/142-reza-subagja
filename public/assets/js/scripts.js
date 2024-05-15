document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.hero-slide');
    let index = 0;

    function showSlide(n) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === n) {
                slide.classList.add('active');
            }
        });
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    setInterval(nextSlide, 5000); // Change slide every 5 seconds

    showSlide(index); // Display the first slide
});