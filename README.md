Ceci est un mini mini outil pour faire des sites php rapidement.

Il contient quelques notions de "l'architecture MVC".
    Le routeur, un simple fichier regroupant les URL possible dans le projet
    Les contrôleurs, qui sont des fonctions exécutés en fonction de l'URL
    La vue, qui sont des fichiers html/php appellés généralement à la fin d'un contrôleur
    La base de données, que l'on peut utiliser à l'aide de la fonction get_connexion_to_database() (pensez à la paramétrer)

Voici l'arborescence:
    index.php => Lance le site
    routes.php => Contient un tableau avec les routes à lancer
    controllers.php => Contient les fonctions contrôleur
    view / ... => Contient toutes les vues du site
    system / personnalFunctions.php => Contient des fonctions pratiques à utiliser dans le code