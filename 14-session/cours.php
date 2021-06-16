
Session permet de stocker des informations non plus sur l'ordinateur de l'utilisateur, mais plutot sur un fichier dans notre propre serveur, dans le dossier TMP

Cela nous permet de stocker des informations plus sensibles

Pour lier les informations stocker sur notre serveur à un utilisateur, un cookie de session est automatiquement créé.

Ce cookie de session, que vous pouvez retrouver dans l'inspecteur dans l'onglet "application", prends comme valeur une clé généré aléatoirement.
Cette clé est le nom du fichier qu'on retrouvera dans le dossier TMP


Pour utiliser Session, il faut : 

    - Appeler la fonction session_start()
        Attention, session_start dois être appelé dans chaque page ou la $_SESSION est utilisé
    - Pour ajouter une information dans session, on utilise la superglobale $_SESSION de la manière suivante :
        $_SESSION["indice"] = "Valeur";
    - Pour recuperer une information présente dans $_SESSION, on utilise $_SESSION de la manière suivant 
    $maValeur = $_SESSION["indice"];


<?php

session_start();

$_SESSION["titre"] = "contenu";

echo $_SESSION["titre"];



