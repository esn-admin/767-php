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





