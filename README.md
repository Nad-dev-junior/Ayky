##Ayky

Ayky est une plateforme web de recrutement dédiée au secteur de la restauration à Niamey (boulangerie, pâtisserie, cuisine, service). Elle permet aux candidats de consulter, filtrer et rechercher des offres d'emploi publiées par des entreprises partenaires.


## Aperçu

- Page d'accueil avec carrousel et présentation
- Liste des offres d'emploi avec filtre par métier et recherche par mot-clé (sans rechargement de page)
- Page de détail par offre
- Page de contact
- Architecture MVC personnalisée en PHP

## Stack technique

Back-end 
PHP 8.2, MySQL/MariaDB, PDO.
Front-end 
 HTML5, CSS3 (mobile first), JavaScript vanilla.
Dépendances 
Composer (autoload PSR-4), vlucas/phpdotenv.
Icônes  Font Awesome 6 .
Police  Google Fonts — Barlow .

## Fonctionnalités

- **Architecture MVC** : Router personnalisé, Controllers, Entités, Repositories (pattern Repository au-dessus du Model)
- **Connexion base de données en Singleton** via PDO
- **Requêtes préparées** pour toute entrée utilisateur (protection contre les injections SQL)
- **Recherche et filtre en AJAX** (`fetch`), avec réponses JSON côté serveur
- **Routes dynamiques** (`/jobs/{id}/`) pour les pages de détail
- **Responsive mobile first**, avec menu burger animé.

## Prérequis

- PHP >= 8.1
- MySQL ou MariaDB
- Composer
- Un serveur local (XAMPP, WAMP, ou équivalent).

## Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/<votre-utilisateur>/ayky.git
cd ayky
```

### 2. Installer les dépendances PHP

```bash
composer install
