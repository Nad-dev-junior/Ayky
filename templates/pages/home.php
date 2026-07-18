<?php
require_once  APP_ROOT . "/templates/pages/header.php";

// use App\Entity\Category;

?>
<header>
<div class="carousel">
      <div class="carousel-track">
        <img src="<?= assets('img/girl-boul.jpg') ?>" class="carousel-slide " alt="boulangére">
        <img src="<?= assets('img/man-patisse.jpg') ?>" class="carousel-slide" alt="patissier">
        <img src="<?= assets('img/girl-patisse.jpg') ?>" class="carousel-slide" alt="patissiére">
      </div>
      <div class="recruitement-banner">
        <div class="recruitement-track">
          <span>A Niamey, Trouver votre prochain emploi dans la restauration!</span>
          <span>A Niamey, Trouver votre prochain emploi dans la restauration!</span>
          <span>A Niamey, Trouver votre prochain emploi dans la restaurationus!</span>
          <span>A Niamey, Trouver votre prochain emploi dans la restaurations!</span>
        </div>
      </div>
      <div class="carousel-dots">
        <span class="dot active" data-index="0"></span>
        <span class="dot " data-index="1"></span>
        <span class="dot " data-index="2"></span>
      </div>
      <div class="line-continue">
        <h2>A Niamey , nous recrutons</h2>
      </div>
    </div>
  </header>
  <main>
    <section class="presentation">
      <div class="presentation-container">
        <div class="presentation-content">
          <div class="presentation-text">
            <h1>Ayky Pour Vous!</h1>
            <p>Passionné(e) par la pâtisserie ou la boulangerie ? Avec Ayky, trouvez le métier de vos rêves dans la restauration. Les entreprises de Niamey recrutent activement en ce moment — c'est le bon moment pour postuler.</p>
            <p>N'hésitez pas à envoyer votre candidature dès aujourd'hui.</p>
          </div>
          <div class="presentation-images">
            <img src="<?= assets('img/brochettes.jpg') ?>" alt="brochettes de Bœuf" class="fade-slide active">
            <img src="<?= assets('img/Karlee Purkiss.jpg') ?>" alt="Karlee Purkiss" class="fade-slide">
            <img src="<?= assets('img/sp-patisserie1.jpg') ?>" alt="sp-patisserie1" class="fade-slide">
            <img src="<?= assets('img/sp-patisserie2.jpg') ?>" alt="sp-patisserie2" class="fade-slide">
            <img src="<?= assets('img/pizza.jpg') ?>" alt="pizza" class="fade-slide">
          </div>

        </div>

      </div>
    </section>
    <section class="entreprises">
      <div class="entreprises-container">
        <h2>Entreprises Partenaires</h2>
        <div class="slide-entreprises">
          <div class="entreprise-track">
            <div class="entreprise-card">
              <img src="<?= assets('img/logo-entreprise1.png') ?>" alt="logo-entreprise1" class="entreprise-img " >
            </div>
            <div class="entreprise-card">
               <img src="<?= assets('img/logo-entreprise2.png') ?>" alt="logo-entreprise2" class="entreprise-img " >
            </div>
            <div class="entreprise-card">
              <img src="<?= assets('img/logo-entreprise3.png') ?>" alt="logo-entreprise3" class="entreprise-img " >
            </div>
            <div class="entreprise-card">
              <img src="<?= assets('img/logo-entreprise4.png') ?>" alt="logo-entreprise4" class="entreprise-img " >
            </div>
            <div class="entreprise-card">
               <img src="<?= assets('img/logo-entreprise5.png') ?>" alt="logo-entreprise5" class="entreprise-img " >
            </div>
            <div class="entreprise-card">
               <img src="<?= assets('img/logo-entreprise6.png') ?>" alt="logo-entreprise6" class="entreprise-img " >
            </div>
          </div>
     
        </div>
      </div>
    </section>
  </main>
  <?php
require_once  APP_ROOT . "/templates/pages/footer.php";

?>
  <script src="<?= assets('js/script.js') ?>"></script>
</body>

</html>