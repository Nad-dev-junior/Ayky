<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayky</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <h1 class="logo">Ayky</h1>
        <button class="burger" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navlinks">
            <ul>
                <li class=""><a href="#">Accueil</a></li>
                <li class=""><a href="#">Les Offres</a></li>
                <li class=""><a href="#">Contact</a></li>
            </ul>
        </div>

    </nav>
    <main>
        <section class="offres-hero">
            <div class="offres-hero-container">
                <h1>Trouver votre prochain emploi en restauration à Niamey</h1>
                <p>Boulangérie, patisserie, cuisine,service , de nouvelles offres chaque semaines.</p>

                <form class="offres-search" role="search">
                    <input type="text" placeholder="Poste, mot-clé..." aria-label="Rechercher un emploi" name="search">

                    <select aria-label="Ville">
                        <option value="">Toutes les villes</option>
                        <option value="">Niamey</option>
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
                    <img src="assets/img/logo-entreprise1.png" alt="Jessica Kitchen" class="offre-logo">
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
    </main>
    <footer class="footer">
        <div class="footer-container">
            <p class="footer-logo">Ayky</p>
            <p class="footer-text">Trouver votre métier de reve dans la restauration à Niamey</p>

            <div class="footer-socials">
                <a href="#" aria-label="Facebook" class="social-link">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" aria-label="Instagram" class="social-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" aria-label="Twitter / X" class="social-link">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" aria-label="whatsApp" class="social-link">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
            <p class="footer-copy">© 2026 Ayky -Tous droits réservés</p>
        </div>
    </footer>
    <script src="/assets/js/script.js"></script>
</body>

</html>