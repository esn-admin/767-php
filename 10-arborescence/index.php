<?php   
        include("inc/head.inc.php"); 
        include_once("inc/header.inc.php");

        // include permet d'importer le code d'un autre fichier directement a l'endroit voulu
        // include_once permet de s'assurer que l'importation n'ai lieu qu'une seule fois
        // require fonctionne comme un include, sauf que s'il n'arrive pas a inclure le fichier, il stop tout
        // require_once fonctionne comme require, sauf que l'important ne dois avoir lieu qu'une seule fois


?>
    
        
        <main>
            <p>Je suis la page index</p>
        </main>   
        
<?php 
    include("inc/footer.inc.php");

?>