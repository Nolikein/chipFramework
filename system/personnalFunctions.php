<?php

# Fonction de débug de tableau/object rapide
if(!function_exists('dprint')) {
    function dprint($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

# Fonction pour obtenir le chemin vers la racine
if( !function_exists('base_path')) {
    function base_path() : string {
        if(!isset($_base_path))
        {
            static $_base_path;
            $_base_path = $_ENV['PWD'] ?? dirname(__DIR__);
        }
        return $_base_path;
    }
}

# Donne la méthode HTTP donnée (GET/POST)
if(!function_exists('getHttpMethod')) {
    function getHttpMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}

# Donne l'uri/url en cours (/mon/super/url)
if(!function_exists('getUri')) {
    function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }
}

# Lance un fichier dans le dossier vue
if(!function_exists('launchView')) {
    function launchView(string $view, $variables = [])
    {
        // Importe toutes les variables pour les appeller ensuite dans la vue
        extract($variables);

        // On vérifie que la vue existe avant de l'importer
        $viewToLaunch = base_path().'/view/'. $view .'.view.php';
        if(!file_exists($viewToLaunch)) {
            die('Le fichier de vue : '. $viewToLaunch .'n\'existe pas.');
        }
        include($viewToLaunch);
    }
}