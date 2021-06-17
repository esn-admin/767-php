<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Page de connexion</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <!-- Creez un formulaire avec la methode POST, incluant le pseudo et le mdp -->
        <!-- Dans profil.php, afficher une phrase de bienvenue incluant le pseudo -->
        <!-- Dans profil.php, tout en haut, eccrivez une condition qui renvoie vers la page de connexion si le profil est different "jojo", et le mdp different de "securite"--> 

        <h1 class="text-center m-5">Page de connexion</h1>
        <form action="profil.php" method="post" class="w-50 mx-auto">
            <div class="conteneur-pseudo form-floating mb-3">
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
                <label for="pseudo">Pseudo</label>
            </div>
            <div class="conteneur-password form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de Passe">
                <label for="password">Mot de Passe</label>
            </div>
            <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Submit form</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>