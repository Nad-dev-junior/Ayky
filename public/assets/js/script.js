const burger = document.querySelector('.burger');
const navUL = document.querySelector('.navlinks ul');


if(burger){
   burger.addEventListener('click', () => {
  
      navUL.classList.toggle('active');
      burger.classList.toggle('active'); 
   }) ;
}

// carousel-autoplay-points-swipe

const track = document.querySelector('.carousel-track');
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0 ;

if(track) {
   function goToSlide(index){
      currentIndex = index ;
      track.style.transform = `translateX(-${index * 100}%)`;
   
      dots.forEach(dot => dot.classList.remove('active'));
      dots[index].classList.add('active');
      // dots[index].classList.add('active');
   }
   
   // clic sur les points
   
   dots.forEach(dot=>{
      dot.addEventListener('click', () =>{
         goToSlide(Number(dot.dataset.index)) ;
   });
   
   });
   
   // defilement automatique
   
   setInterval(() =>{
      const nextIndex = (currentIndex + 1) % slides.length ;
      goToSlide(nextIndex);
   }, 4000);

   // swipe tactile (mobile) , glisser le doigt pour changer d'image

let startX = 0 ;

track.addEventListener('touchstart', (e) =>{
   startX = e.touches[0].clientX ;
  
})
track.addEventListener('touchend', (e) => {
   const endX = e.changedTouches[0].clientX;   // position finale
   const diff = startX - endX;   // calcul de la différence, seulement possible ICI

   if (diff > 50) {
       goToSlide((currentIndex + 1) % slides.length);
   } else if (diff < -50) {
       goToSlide((currentIndex - 1 + slides.length) % slides.length);
   }
});
}


// presantation de ayky

const fadeSlides = document.querySelectorAll('.fade-slide') ;
let currentFade = 0 ;
if(fadeSlides.length){
   setInterval(()=>{
   fadeSlides[currentFade].classList.remove('active');
   currentFade =(currentFade + 1) % fadeSlides.length;
   fadeSlides[currentFade].classList.add('active');
} , 3000) ; // change d'image toutes les 3 secondes 

}

// Filtre sans recharger la page

const chip = document.querySelectorAll('.filter-chip') ; 

chip.forEach(filterChip => {
   filterChip.addEventListener('click' ,() => {
     const category = filterChip.textContent ;
     fetch(`/jobs-filter?category=${category}`)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        const offresGrid = document.querySelector('.offres-grid');
offresGrid.innerHTML = "";
data.forEach(job => {
   const carteHTML = `
   <article class="offre-card">
   <div class="offre-header">
   <img src="/assets/img/logo-entreprise1.png" alt="Jessica Kitchen" class="offre-logo">
   <div>
   <h3>${job.title}</h3>
   <p class="offre-entreprise">${job.companyName}</p>
   </div>
   </div>
   <div class="offre-meta">
   <span><i class="fas fa-map-marker-alt"></i> <span itemprop="jobLocation">${job.countryName}</span></span>
   <span><i class="fas fa-clock"></i> <span itemprop="employmentType">CDI</span></span>
     <span><i class="fas fa-money-bill-wave"></i>${job.salary} FCFA</span>
     </div>
     <p class="offre-description" itemprop="description"> ${job.description}
                </p> 
                <a href="/jobs/${job.id}" class="offre-cta">Voir l'offre <i class="fas fa-arrow-right"></i></a>
               
</article> ` ;
 offresGrid.innerHTML += carteHTML;
})
    });
   } )
}) ;

// Recherche en fonction d'un mot cle.

const searchForm = document.querySelector('.offres-search');
const searchInput = document.querySelector('input[name="search"]');

if(searchForm) {
   searchForm.addEventListener('submit' , (event) =>{
      event.preventDefault();
      const keyword = searchInput.value  ;
      fetch(`/jobs-search/?search=${keyword}`)
      .then(response => response.json())
      .then(data => {
         console.log(data);
         const offresGrid = document.querySelector('.offres-grid');
         offresGrid.innerHTML = "";
         if (data.length === 0) {
            offresGrid.innerHTML = ` <h3 class="no-results"><i class="fas fa-box-open"></i>Aucune offre ne correspond à votre recherche</h3>` ;
        } else {
          data.forEach(job => {
   const carteHtml = `<article class="offre-card">
   <div class="offre-header">
   <img src="/assets/img/logo-entreprise1.png" alt="Jessica Kitchen" class="offre-logo">
   <div>
   <h3>${job.title}</h3>
   <p class="offre-entreprise">${job.companyName}</p>
   </div>
   </div>
   <div class="offre-meta">
   <span><i class="fas fa-map-marker-alt"></i> <span itemprop="jobLocation">${job.countryName}</span></span>
   <span><i class="fas fa-clock"></i> <span itemprop="employmentType">CDI</span></span>
     <span><i class="fas fa-money-bill-wave"></i>${job.salary} FCFA</span>
     </div>
     <p class="offre-description" itemprop="description"> ${job.description}
                </p> 
                <a href="/jobs/${job.id}" class="offre-cta">Voir l'offre <i class="fas fa-arrow-right"></i></a>
               
</article>`;
   offresGrid.innerHTML += carteHtml ;
})
        }
      })
   });


}

