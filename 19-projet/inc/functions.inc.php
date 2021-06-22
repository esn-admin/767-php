<?php 

/**
 * La fonction debug sert a renvoyer l'echo print_r d'une liste passée en argument
 * @param array $listeADebugger
 * @return null
 */
function debug(array $listeADebugger){
    echo "<pre>";
    print_r($listeADebugger);
    echo "</pre>";
}


/**
 * La fonction verif pseudo sert a verifier si le pseudo remplis certains critère.
 * Les criteres sont :
 *  Pseudo dois être compris entre 4 et 20 caracteres
 * @param string $pseudo
 * @return bool True si la verif nous convient, false sinon
 */

function verifPseudo(string $pseudo){
    if (strlen($pseudo) < 4 OR strlen($pseudo) > 20){
        return false;
    }
    return true;

}

/**
 * Verifie dans la base de donnée si le pseudo est deja existant dans la base de donnée
 * @param string $pseudo 
 * @return bool true si le pseudo existe, false sinon
 */


function checkPseudo($pseudo){
    // Requete dans la base de donnée avec le pseudo
    global $pdo; // Va dans l'espace global, et ramène la variable $pdo

    $enregistrement = $pdo->prepare("SELECT * FROM membre WHERE pseudo = ?");

    $resultat = $enregistrement->execute(
        [$pseudo]
    );
    // Si la requete a bien fonctionnée
    if ($resultat){
        $nbLigneDansRequete = $enregistrement->rowCount();
        // Je regarde le nombre de ligne dans l'enregistrement
        if ($nbLigneDansRequete){
            // Si il y a une ligne ou pluss, on retourne true
            return true;
        }else{
            // s'il n'y a pas de ligne, on retourne false
            return false;
        }
    }
}

/**
 * Function qui renvoie true si l'utilisateur est connecté, qui renvoie false sinon
 * @param null
 * @return bool 
 */
 function userIsConnect(){
     if (isset($_SESSION["pseudo"])){
         return true;
     }else{
         return false;
     }
 }

 /**
  * Function qui renvoie true si l'utilisateur est connecté ET qu'il est administeur
  * @param null
  * @return bool
  */

  function adminIsConnect(){
      global $pdo;

      // deja, si l'utilisateur n'est pas connecté, on renvoie false directe
        if (!userIsConnect()){
            return false;
        }

        // Faire une requete dans la base de donnée pour recuperer le role

        $pseudoPersonneConnecte = $_SESSION["pseudo"];

        $enregistrement = $pdo->prepare("SELECT * FROM membre WHERE pseudo = ?");

        $resultat = $enregistrement->execute(
            [$pseudoPersonneConnecte]
        );

        if ($resultat){
            $maLigne = $enregistrement->fetch(PDO::FETCH_ASSOC);

            $rolePersonneConnecte = $maLigne["role"];

            if ($rolePersonneConnecte == 1){
                return true;
            }else{
                return false;
            }
        }
  }






