<?php
require_once  APP_ROOT . "/templates/pages/header.php";

?>
<main>
  <section class="job-detail">
      <div class="job-detail-container">
        <div class="job-detail-header">
            <span class="offre-badge">Urgent</span>
            <h1 itemprop="title"><?= $job->getTitle(); ?></h1> 
            <div class="job-detail-meta">
                <span>
                    <i class="fas fa-buiding"></i> <span itemprop="hiringOrganization"><?= $job->getCompanyName() ?></span>
                </span>
                <span><i class="fas fa-map-marker-alt"></i><span itemprop="jobLocation"><?= $job->getCountryName() ?></span></span>
                <span><i class="fas fa-clock"></i> CDI</span>
                <span><i class="fas fa-money-bill-wave"></i> <?= $job->getSalary(); ?> FCFA</span>
            </div>
        </div>
        <div class="job-detail-body">
                <h2>Description du poste</h2>
                <p itemprop="description"><?= $job->getDescription() ?></p>
            </div>
        <div class="job-detail-cta">
            <a href="https://wa.me/22782879492" class="job-apply-btn">
                <i class="fab fa-whatsapp"> Postuler à cette offre</i>
            </a>
        </div>
      </div>
</section>  
</main>

  <?php
require_once  APP_ROOT . "/templates/pages/footer.php";

?>