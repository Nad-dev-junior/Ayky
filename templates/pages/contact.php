<?php
require_once  APP_ROOT . "/templates/pages/header.php";

use App\Entity\Category;

?>
    <main>
        <!-- <section class="offres-hero">
            <div class="offres-hero-container">
                <h1>Contactez-nous</h1>
                <p>Une question ? une offre à publier ?  Ecrivez-nous.</p>
                <form class="contact-form" novalidate>
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                         <input type="text" placeholder="votre prenom" aria-label="votre nom complet" name="name">
                    </div>
                   
                    <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" placeholder="vous@exemple.com" required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone(optionnel)</label>
                <input type="tel" name="phone" id="tel" placeholder="+227 08 00 00 01">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message"  rows="5" placeholder="Votre message" required></textarea>
            </div>
                    
                    <button type="submit">Envoyez</button>
                </form>
                <div class="contact-alt">
                    <a href="#" class="contact-alt-link">
                    <i class="fab fa-whatsApp"></i>Nous écrire sur WhatsApp</a>
                    <a href="mailto:contact@ayky.com" class="contact-alt-link">
                        <i class="fas fa-envelope"></i> contact@ayky.com
                    </a>
                </div>
            </div>
        </section> -->
        <section class="offres-hero">
            <div class="offres-hero-container">
                <h1>Contactez-nous</h1>
                <p>Une question ? Une offre à publier ? Écrivez-nous.</p>

                <form class="contact-form" novalidate>
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" id="email" name="email" placeholder="vous@exemple.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Téléphone (optionnel)</label>
                        <input type="tel" id="phone" name="phone" placeholder="+227 ...">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Votre message..." required></textarea>
                    </div>

                    <button type="submit">Envoyer</button>
                </form>

                <div class="contact-alt">
                    <a href="https://wa.me/22782879492" class="contact-alt-link">
                        <i class="fab fa-whatsapp"></i> Nous écrire sur WhatsApp
                    </a>
                    <a href="mailto:contact@ayky.com" class="contact-alt-link">
                        <i class="fas fa-envelope"></i> contact@ayky.com
                    </a>
                </div>
            </div>
        </section>

    </main>
    <?php
    require_once  APP_ROOT . "/templates/pages/footer.php";

?>
    <script src="/assets/js/script.js"></script>
</body>

</html>