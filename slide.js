const carouselSlide = document.querySelector('.carousel-slide');
const carouselImage = document.querySelectorAll('.carousel-slide img');

//knoppen
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//counter
let counter = 1;
const size = carouselImage[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

//buttons listerner
nextBtn.addEventListener('click', () =>{
   if (counter >= carouselImage.length - 1) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click', () =>{
    if (counter <=0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

carouselSlide.addEventListener('transitionend', ()=>{
if (carouselImage[counter].id === 'lastClone'){
    carouselSlide.style.transition = "none";
    counter = carouselImage.length -2;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}

if (carouselImage[counter].id === 'firstClone'){
    carouselSlide.style.transition = "none";
    counter = carouselImage.length -counter;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}
});