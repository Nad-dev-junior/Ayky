const burger = document.querySelector('.burger');
const navUL = document.querySelector('.navlinks ul');


burger.addEventListener('click', () => {
  
   navUL.classList.toggle('active');
   burger.classList.toggle('active'); 
}) ;

// carousel-autoplay-points-swipe

const track = document.querySelector('.carousel-track');
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0 ;

function goToSlide(index){
   currentIndex = index ;
   track.style.transform = `translateX(-${index * 100}%)`;

   dots.forEach(dot => dot.classList.remove('active'));
   dots[index].classList.add('active');
   dots[index].classList.add('active');
}

// clic sur les points

dots.forEach(dot=>{
   dot.addEventListener('click', () =>{
      goToSlide(Number(dot.datset.index)) ;
});

});

// defilement automatique

setInterval(() =>{
   const nextIndex = (currentIndex + 1) % slides.length ;
   goToSlide(nextIndex);
}, 4000);

// swipe tactile (mobile)

let startX = 0 ;

track.addEventListener('touchstart', (e) =>{
   startX = e.touches[0].clientX ;

   if(diff > 50) {
      goToSlide((currentIndex + 1)% slides.length); // swipe gauche->suivant
   }else if (diff < -50){
      goToSlide((currentIndex - 1 + slides.length)% slides.length); //swipe droite -> précédent
   }
})