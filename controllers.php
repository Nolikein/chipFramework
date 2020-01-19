<?php

    function homepageController()
    {
        # @Objectif : Nous allons appeler un fichier de 'vue' (celui-ci doit se trouver dans le dossier vue)
        # Pour homepage, il existe un fichier homepage.view.php
        launchView('homepage');
    }

    function myTestController()
    {
        # @Objectif : Nous allons définir des variables à inclure dans 'la vue' et appeller 'la vue' souhaité
        $viewVariables = [];
        $viewVariables['premierMessage'] = 'Vous pouvez';
        $viewVariables['secondMessage'] = ' écrire ce que vous voulez';

        # On inclus la vue, et on lui envoit nos variables
        launchView('test', $viewVariables);
    }

    function connectDatabaseController()
    {
        // Se connecte à la base de données
        $accesDbb = get_connexion_to_database();

        // Execute une requête
        $sql = 'SELECT * FROM matable';
        $pdoResponse = $accesDbb->prepare($sql);
        $pdoResponse->exec();

        // Récupération des données
        $bddData = [];
        while($data = $pdoResponse->fetch()) {
            $bddData[] = $data;
        }

        // On définit un nom pour les données à afficher dans la vue
        $viewVariables['bddData'] = $bddData;
        
        # On inclus la vue, et on lui envoit nos variables
        launchView('database', $bddData);
    }

