let currentIndexResenia = 0;

function showNextSlide() {
    const slides = document.querySelectorAll('.slide-resenia');
    const totalSlides = slides.length;

    slides[currentIndexResenia].classList.remove('active');

    currentIndexResenia = (currentIndexResenia + 1) % totalSlides;

    const offset = -currentIndexResenia * 100;
    document.querySelector('.slides-resenia').style.transform = `translateX(${offset}%)`;

    slides[currentIndexResenia].classList.add('active');
}

setInterval(showNextSlide, 6000);
