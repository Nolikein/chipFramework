<?php

# @Objectif : Tenter d'obtenir un objet PDO (pour la connexion, et l'utilisation d'une base de données)
if(!function_exists('get_connexion_to_database')) {
    function get_connexion_to_database()
    {
        $databaseType = 'mysql'; // Le nom du type de base de données à utiliser. Mettez mysql pour mysql ou mariadb
        $databaseName = 'myDb'; // Nom de la base de données à accéder
        $ipDatabase = '127.0.0.1'; // Ou localhost (l'ip de la machine), est l'adresse où se situe la base de données.
        $ipDatabase = 'mariadb'; // Ou localhost (l'ip de la machine), est l'adresse où se situe la base de données.
        $user = 'root'; // Est le nom d'utilisateur à utiliser
        $password = 'root'; // Est le mot de passe à utiliser

        // Le try, est utilisé pour les "Exceptions PHP".
        // On va tenter d'exécuter le code entre les accolades du try, et si une erreur survient, le bloc catch sera appelé.
        try {
            return new PDO($databaseType.':dbname='.$databaseName.';host='.$ipDatabase, $user, $password);
        } catch (PDOException $exception) {
            die('Connexion avec la base de données échouée :<br/>'
            .'Code d\'erreur : '.$exception->getCode(). '<br />'
            . 'Message '. $exception->getMessage());
        }
    }
}