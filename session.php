<?php 
    require 'header.php';
    /* Pour demarer une session */
    session_start();
    /* La variable $_SESSION fonctionne comme un tableau */
    $_SESSION['role'] = "admin";
?>

<!-- Une session c'est comme une sorte de cookie privée, avec un identifiant aléatoire pour chaque connexion 
    Elle est détruite automatiquement à la fermeture du navigateur
-->

<h1>Debug</h1>
<pre><?= var_dump($_SESSION) ?></pre>
