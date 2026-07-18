<?php
Use Ayky\Routing\Router ;
 ?>
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
        <li class="<?= Router::activeRoute("/home/") ?>"><a href= "/home/">Accueil</a></li>
        <li class="<?= Router::activeRoute("/jobs/") ?>"><a href="/jobs/">Les Offres</a></li>
        <li class="<?= Router::activeRoute("/contact/") ?>"><a href="/contact/">Contact</a></li>
      </ul>
    </div>

  </nav>
 