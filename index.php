<?php

// On inclus quelques fonctions utiles partout dans le programme (comme base_path())
require __DIR__.'/system/personnalFunctions.php';

// Inclus le fichier permettant la connexion à une base de données
require  base_path().'/system/database.php';

// On définit le fichier des actions à effectuer selon l'URL (les fameux contrôleurs)
$controllerPath = base_path().'/controllers.php';

// On vérifie que le fichier des contrôleurs existe, sinon on termine le programme
if(!file_exists($controllerPath)) {
    die('Le fichier Controllers n\'existe pas.');
}

// @Objectif : On cherche quel contrôleur lancer, on vérifie qu'il existe et on le lance
    // On récupère tout les contrôleurs
include $controllerPath;

    // On récupère le fichier des URLs disponibles
$routes = require(base_path().'/routes.php');

    // On récupère les données de l'URL
$url = getUri();
$controllerToLaunch = '';

if(!array_key_exists($url, $routes)) {
    $controllerToLaunch = 'homepageController';
} else {
    $controllerToLaunch = $routes[$url].'Controller';
}

// On vérifie que la fonction contrôleur existe
if(!function_exists($controllerToLaunch)) {
    die('La fonction contrôleur '. $controllerToLaunch .' indiqué dans le fichier de routes n\'existe pas dans le dossier des contrôleurs. Vous avez le choix entre : '
    . implode(', ', $routes));
}

// Lancement du contrôleur
    $controllerToLaunch();