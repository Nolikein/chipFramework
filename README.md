# chipFramework

## Présentation

Ceci est un mini mini outil pour faire des sites php rapidement.

Il contient quelques notions de "l'architecture MVC".
+ Le routeur, un simple fichier regroupant les URL possible dans le projet
+ Les contrôleurs, qui sont des fonctions exécutés en fonction de l'URL
+ La vue, qui sont des fichiers html/php appellés généralement à la fin d'un contrôleur
+ La base de données, que l'on peut utiliser à l'aide de la fonction get_connexion_to_database() (pensez à la paramétrer)

## HOW TO ...
+ Pour ajouter un lien possible dans l'url, allez dans le fichier routes.php
+ Pour ajouter un contrôleur d'actions, ajoutez une fonction dans contrôlers.php
+ Pour ajouter un fichier d'affichage. Ajoutez le dans le dossier view et mettez lui le nom : ${maVue}.view.php
+ Pour modifier les paramètres d'accès à votre base de données, allez dans le fichier database.php du dossier system à la racine du projet


## L'arborescence des fichiers et dossiers
+ index.php => Lance le site
+ routes.php => Contient un tableau avec les routes à lancer
+ controllers.php => Contient les fonctions contrôleur
+ view / ... => Contient toutes les vues du site
+ system / personnalFunctions.php => Contient des fonctions pratiques à utiliser dans le code

