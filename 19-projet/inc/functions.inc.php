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

function verifPseudo(){
    
}





