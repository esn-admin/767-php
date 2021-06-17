<?php 





// Connexion a la base de donnée
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque',"root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Faire un SELECT avec pdo et la methode query 

// On utilise la methode query pour faire une requete contenant un select. 
// La methode retourne dans $affichage un objet contenant le resultat de la requete, mais ne pouvant pas être affiché tel quel
$affichage = $pdo->query("SELECT * FROM livre");

// On utilise la methode fetch qui va retourner dans la variable $listeAffichage la liste contenant UNE SEULE LIGNE.
// ON DOIS DONC APPLIQUER FETCH PLUSIEURS FOIS POUR EXTRAIRE PLUSIEURS LIGNES

// Stock dans une liste la premiere ligne du tableau
$listeAffichage = $affichage->fetch(PDO::FETCH_ASSOC);


// On utilise dans ce cas la boucle while, qui va permettre d'afficher tout les résultats du select sous forme de liste
while($listeAffichage = $affichage->fetch(PDO::FETCH_ASSOC)){
    // Tant qu'il reste des éléments dans affichage, on rentre dans la condition.
    // Quand il n'y a plus d'élément, donc que tout a été affiché, la boucle s'arrete

    // FETCH_ASSOC permet d'afficher comme indice le nom de la colonne
    // FETCH_NUM permet d'afficher comme indice l'index numertique de la colonne
    // FETCH_BOTH permet d'afficher comme indice ET le nom de la colonne ET l'index numérique
    echo "<pre>";
    print_r($listeAffichage);
    echo "</pre>";
}

// Exercice : Creez une page abonne.php dans laquelle vous afficherez un tableau html avec toutes la listes des abonnées 
// 1_ Creez abonne.php 
// 2_ Connexion a la base de donnée 
// 3_ Requete avec query (testez votre requete dans phpmyadmin)
// 4_ Boucle While pour afficher tout les resultats


// Afficher le resultat d'une requete SELECT avec un prepare

// On prépare la requete que l'on stock dans la variable $enregistrement 
// On met un ? pour les parametres à ajouter dans la requete
$enregistrement = $pdo->prepare("SELECT * FROM livre WHERE auteur=?");


// On execute la requete préparée, on donnant en parametre la liste des paramètres de la requete
// Si la requete fonctionne normalement, $resultat est true
// S'il y a eu une erreur, $resultat est false
$resultat = $enregistrement->execute(
["Gabriel"]
);

// Si la requete s'est bien déroulé (donc que $resultat est true)
if ($resultat){
    // On fetch $enregistrement qui contient tout les résultats
    // On fetch avec une boucle while pour récuperer toutes les lignes
    while($listeUnLivre = $enregistrement->fetch(PDO::FETCH_ASSOC)){
        // Chaque lignes parcourus est stocké dans $listeUnLivre, puis afficher avec un echo/print_r
        echo "<pre>";
        print_r($listeUnLivre);
        echo "</pre>";
    }
    
}

EXERCICE : 
1_Creez une page recherche_auteur.php 
2_Creez un formulaire get qui demande le nom de l'auteur recherché 
3_Assurez vous d'avoir bien la variable voulu dans $_GET, puis enregistrez la dans $auteur_recherche 
4_Connectez vous a la base de donnée 
5_A l'aide d'une requete prepare recuperer les informations des livres ayant l'auteur voulu
6_Affichez ces informations dans un tableau HTML





