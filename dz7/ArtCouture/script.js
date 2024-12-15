const slides = document.querySelector('.slides');
const slide = document.querySelectorAll('.slide');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

let currentIndex = 0;

function showSlide(index) {
    if (index >= slide.length) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = slide.length - 1;
    } else {
        currentIndex = index;
    }
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}

prev.addEventListener('click', () => {
    showSlide(currentIndex - 1);
});

next.addEventListener('click', () => {
    showSlide(currentIndex + 1);
});
