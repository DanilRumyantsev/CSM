const slider = document.querySelector('.slider');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const slideWidth = document.querySelector('.slider-container').offsetWidth;
let slideIndex = 0;

prevBtn.addEventListener('click', () => {
  slideIndex--;
  slide();
});

nextBtn.addEventListener('click', () => {
  slideIndex++;
  slide();
});

function slide() {
  slider.style.transform = `translateX(-${slideWidth * slideIndex}px)`;
}
