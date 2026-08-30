-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : sam. 13 juin 2026 à 01:54
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12
CREATE DATABASE IF NOT EXISTS ayky CHARACTER SET utf8mb4;

USE ayky;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Base de données : `ayky`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
    `id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO
    `category` (`id`, `name`)
VALUES (1, 'Pâtisserie '),
    (2, 'Boulangerie'),
    (3, 'Fast Food'),
    (4, 'Cantine');

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
    `id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `country_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Déchargement des données de la table `company`
--

INSERT INTO
    `company` (`id`, `name`, `country_id`)
VALUES (1, 'King Chocolat', 1),
    (2, 'Saveurs d\'ici', 1),
    (4, 'Tazoudeh', 1),
    (5, 'Dady', 2);

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
    `id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Déchargement des données de la table `country`
--

INSERT INTO
    `country` (`id`, `name`)
VALUES (1, 'Niamey'),
    (2, 'Maradi'),
    (3, 'Agadez'),
    (4, 'Dosso');

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

CREATE TABLE `job` (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `salary` int(11) NOT NULL,
    `country_id` int(11) NOT NULL,
    `company_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Déchargement des données de la table `job`
--

INSERT INTO
    `job` (
        `id`,
        `title`,
        `description`,
        `salary`,
        `country_id`,
        `company_id`
    )
VALUES (
        1,
        'Apprentie pâtissier',
        ' Préparation des crèmes et divers taches.',
        38000,
        1,
        1
    ),
    (
        2,
        'Service Traiteur',
        'A la recherche d\'un serveur rigoureux.',
        35000,
        3,
        4
    ),
    (
        3,
        'Cuisinier',
        'A la recherche d\'un cuisinier professionnel pour la préparation du déjeuner aux enfants.',
        45000,
        4,
        5
    );

-- --------------------------------------------------------

--
-- Structure de la table `job_application`
--

CREATE TABLE `job_application` (
    `id` int(11) NOT NULL,
    `cover_letter` text NOT NULL,
    `user_id` int(11) NOT NULL,
    `job_id` int(11) NOT NULL,
    `created_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_catgeory`
--

CREATE TABLE `job_catgeory` (
    `job_id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Déchargement des données de la table `job_catgeory`
--

INSERT INTO `job_catgeory` (`job_id`, `category_id`) VALUES (1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category` ADD PRIMARY KEY (`id`);

--
-- Index pour la table `company`
--
ALTER TABLE `company`
ADD PRIMARY KEY (`id`),
ADD KEY `country_id` (`country_id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country` ADD PRIMARY KEY (`id`);

--
-- Index pour la table `job`
--
ALTER TABLE `job`
ADD PRIMARY KEY (`id`),
ADD KEY `company_id` (`company_id`),
ADD KEY `country_id` (`country_id`);

--
-- Index pour la table `job_application`
--
ALTER TABLE `job_application`
ADD KEY `job_id` (`job_id`),
ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `job_catgeory`
--
ALTER TABLE `job_catgeory`
ADD KEY `category_id` (`category_id`),
ADD KEY `job_id` (`job_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT pour la table `job`
--
ALTER TABLE `job`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `company`
--
ALTER TABLE `company`
ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `job`
--
ALTER TABLE `job`
ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `job_application`
--
ALTER TABLE `job_application`
ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `job_catgeory`
--
ALTER TABLE `job_catgeory`
ADD CONSTRAINT `job_catgeory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
ADD CONSTRAINT `job_catgeory_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;

-- premiére modification de la bdd 14/07/2026

ALTER TABLE `job_application` ADD PRIMARY KEY (`id`);

ALTER TABLE `job_application`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `job_catgeory` ADD PRIMARY KEY (`id`, `name`);

Use ayky;

ALTER TABLE `job_catgeory` ADD PRIMARY KEY (`job_id`, `category_id`);

use ayky;

INSERT INTO
    country (id, name)
VALUES (1, 'Niamey'),
    (2, 'Maradi'),
    (3, 'Agadez'),
    (4, 'Dosso');

USE ayky;

ALTER TABLE `job_catgeory`
ADD INDEX `idx_category_id` (`category_id`);

-- 2. Contrainte UNIQUE sur l'email
ALTER TABLE `users` ADD UNIQUE KEY `uq_email` (`email`);

-- 3. Colonnes manquantes sur job (pour correspondre au front déjà codé)
ALTER TABLE `job`
ADD COLUMN `employment_type` VARCHAR(20) NOT NULL DEFAULT 'CDI' AFTER `salary`,
ADD COLUMN `is_urgent` TINYINT(1) NOT NULL DEFAULT 0 AFTER `employment_type`,
ADD COLUMN `status` VARCHAR(20) NOT NULL DEFAULT 'active' AFTER `is_urgent`,
ADD COLUMN `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `status`;

-- 4. Logo entreprise
ALTER TABLE `company`
ADD COLUMN `logo_path` VARCHAR(255) DEFAULT NULL;

USE ayky;

TRUNCATE TABLE job_catgeory;

USE ayky;

TRUNCATE category;

USE ayky;

SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE category;

SET FOREIGN_KEY_CHECKS = 1;

SELECT * FROM category;

INSERT INTO
    category (name)
VALUES ('Boulanger'),
    ('patissier'),
    ('Cusinier'),
    ('Serveur');

INSERT INTO job_catgeory (job_id , category_id) VALUES (1,2) ,(2, 4) ,(3,3) ;

SELECT * FROM job_catgeory ;