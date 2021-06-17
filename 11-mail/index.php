<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Base d'une page</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        
        <?php 

        // phpinfo();

        $headers = array(
            'From' => 'contact@codeyourlife.fr',
            'reply-to' => 'contact@codeyourlife.fr',
            'X-Mailer' => 'PHP' . phpversion()
        );

            

            mail("samirm.nagg@gmail.com", "Ceci est l'objet du mail", "Ceci est le contenu du mail", $headers);
        ?>

    </body>
</html>