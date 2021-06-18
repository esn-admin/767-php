
# Creez une base de donnée que vous appelerez ecommerce_php, puis creer une premiere table membre

id_membre - int(4) - Clé primaire (s'auto indente)
pseudo - varchar(20) - unique
nom - varchar(30)
prenom - varchar(30)
email - varchar(50)
mdp - varchar(150)
photo - varchar(150)
ville - varchar(50)
code_postal - int(5) - unsigned zerofill
adresse - varchar(50)
genre - enum("m","f","nb","nspp")
role - int(1) - defaut 0


# On etablit notre architecture de dossier

- On crée notre page index.html
- On crée notre inc, qui contiendra toutes les inclusions
    -> init.inc.php/fonctions.inc.php/head.inc.php/header.inc.php/footer.inc.php
- On créé notre dossier assets avec
    -> Un dossier css qui contient style.css
    -> Un dossier js qui contient script.js
    -> Un dossier images qui contient toutes nos images


Exercice -> 
    1_Dans header.inc.php, importer la navigation de bootstrap
    2_Creez les pages inscription.php, connexion.php, profil.php,produit.php, en plaçant dans chacune d'elle les includes
    3- Dans votre navigation bootsrap, placer dans le menu les nouvelles pages crées


# Creation d'un nouveau membre 

- Creez le formulaire dans inscription.php
- Creez une page traitement-inscription.php