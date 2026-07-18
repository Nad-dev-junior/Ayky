<?php
require_once  APP_ROOT . "/templates/pages/header.php";

use App\Entity\Category;

?>
    <main>
        <section class="offres-hero">
            <div class="offres-hero-container">
                <h1>Trouver votre prochain emploi en restauration à Niamey</h1>
                <p>Boulangérie, patisserie, cuisine,service , de nouvelles offres chaque semaines.</p>

                <form class="offres-search" role="search">
                    <input type="text" placeholder="Poste, mot-clé..." aria-label="Rechercher un emploi" name="search">

                    <select aria-label="Ville">
                        <option value="">Toutes les villes</option>
                        <option value="niamey">Niamey</option>
                    </select>
                    <button type="submit">Rechercher</button>
                </form>
            </div>
        </section>
        <div class="offres-filters">
            <button class="filter-chip active">Tous</button>
            <button class="filter-chip">Boulanger</button>
            <button class="filter-chip">Patissier</button>
            <button class="filter-chip">Cuisinier</button>
            <button class="filter-chip">Serveur</button>
        </div>
        <section class="offres-grid" itemscope itemtype="https://schema.org/JobPosting">
            <article class="offre-card">
                <span class="offre-padge">Urgent</span>
                <div class="offre-header">
                    <img src="/assets/img/logo-entreprise1.png" alt="Jessica Kitchen" class="offre-logo">
                    <div>
                        <h3 itemprop="title">Patissier(ére)</h3>
                        <p class="offre-entreprise" itemprop="hiringOrganization">Jessica Kitchen</p>
                    </div>
                </div>
                <div class="offre-meta">
                    <span><i class="fas fa-map-marker-alt"></i> <span itemprop="jobLocation"></span></span>
                    <span><i class="fas fa-clock"></i> <span itemprop="employmentType">CDI</span></span>
                </div>
                <p class="offre-description" itemprop="description"> Nous recherchons un(e) pâtissier(ère) passionné(e) pour rejoindre notre équipe...
                </p>
                <a href="#" class="offre-cta">Voir l'offre <i class="fas fa-arrow-right"></i></a>
            </article>
        </section>
        <section class="offres-reassurance">
            <div class="reassurance-item">
                <i class="fas fa-bolt"></i>
                <h3>Candidature rapide</h3>
                <p>Postuler en 2 minutes via whatsApp</p>
            </div>
            <div class="reassurance-item">
                <i class="fas fa-shield-alt"></i>
                <h3>Entreprises vérifiées</h3>
                <p>Tous nos partenaires sont validées par Ayky</p>
            </div>
            <div class="reassurance-item">
                <i class="fas fa-bell"></i>
                <h3>Alertes personnalisées</h3>
                <p>Recevez les offres qui vous correspondent</p>
            </div>
        </section>
        <section class="offres-alert">
            <div class="offres-allert-container">
                <h2>Ne manquez aucune offre</h2>
                <p>Recevez les nouvelles opportunités directement sur whatsApp</p>
                <a href="#" class="alert-cta">
                    <i class="fab fa-whatsapp"></i> S'inscrire aux alertes
                </a>
            </div>
        </section>
        <section class="offres-faq">
            <h2>Questions fréquentes</h2>
            <details class="faq-item">
                <summary>Comment postuler à une offre sur Ayky ?</summary>
                <p>Cliquez sur "Voir l'offre", puis envoyez votre candidature</p>
            </details>
            <details class="faq-item">
                <summary>Les offres sont-elles gratuites pour les candidats ?</summary>
                <p>Oui, Ayky est entiérement gratuite pour les personnes en recherche d'emploi. </p>
            </details>
        </section>
    </main>
    <?php
require_once  APP_ROOT . "/templates/pages/footer.php";


?>
    <script src="/assets/js/script.js"></script>
</body>

</html>