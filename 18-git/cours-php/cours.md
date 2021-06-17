Ligne de commande a ouvrir dans le bon dossier.
    -> Clique droit -> Gui Bash 
    -> Ouvrir le dossier dans visual studio code -> Terminal -> new terminal
    -> Si besoin, se placer dans le bon fichier en utilant cd pour voir les fichier, et dir pour afficher les dossier

# Uniquement la premiere fois

    -> git config --global user.name "Votre nom"
    -> git config --global user.email "Votre mail"
    -> git config --list -> Pour verifier si le nom et le mail sont ajouté correctement

# Relier notre dossier au repository 

    -> Si vous voulez ignorer des fichiers, creer un .gitignore
    -> git init 
    -> git add . -> git add . permet d'ajouter tout les fichiers (qui serons ajoutés apres)
    -> git status -> Permet de visualiser tout les fichiers et dossier qui sont pris en compte par git
        -> Si un fichier est bien pris en compte, il apparait en vert
        -> S'il n'est pas pris en compte, il apparait en rouge
    -> git commit -m "nom_de_mon_commit"

# Visualiser l'historique

    -> Git log -> Cette commande nous permet d'avoir accès a tout l'historique des commits. Nous avons des infos spécifiques a chaque commit tel que l'auteur, la date, le nom du commit, et l'identifiant du commit 
    -> Git show numero-de-version -> Permet de visualiser un fichier a un moment précis
    -> git reset --hard numero-de-version -> Permet de revenir brutalement a la version antérieur choisie


# Push notre enregistrement en ligne sur github

    -> git remote add origin lien_vers_repository
    -> git push origin master

# La routine git/github est la suivante quand on travaille tout seul

1_ git init
2_ git add . -> On ajoute tout les changements effectuée
3_ git commit -m "nom du commit" 
4_ git remote add origin lien_vers_repository
5_ git push origin master


# Recuperer les changements qui ont été fait sur github

    git pull origin master

# La routine git/github est la suivante quand on travaille a plusieurs

1_ git init
2_ git pull origin master
3_ Faites vos modifications de codes
4_ Refaire un git pull
2_ git add . -> On ajoute tout les changements effectuée
3_ git commit -m "nom du commit" 
4_ git remote add origin lien_vers_repository
5_ git push origin master

# Les branches sur GIT

    git branch -> Permet d'avoir la liste de toutes les branch, et de savoir sur quelle liste on est
    git pull origin master -> Avant de creer une nouvelle branch, on s'assurer que notre branche master sois a jour
    git checkout -b "nom_de_la_nouvelle_branche" -> Permet de creer une nouvelle branche
    git checkout "nom_de_la_branche" -> Permet de changer de branches
    git push origin "nom_de_la_branche" -> Je push ma nouvelle branche

# Fusionner (merge) une branche avec la branche master

    git checkout master -> Pour vous assurer d'être sur la branche master
    git merge nom_de_la_branche -> Pour fusionner la branche
    git branch -d nom_de_la_branche -> Pour supprimer la branche inutile


# Se connecter a un repository distant (de quelqu'un d'autre)

    -> git init
    -> git remote add origin url_du_repository
        -> Attention, si vous avez deja un autre origin, vous pouvez remplacer origin par new_origin
    -> git pull origin master -> (ou new_origin) 

# Comment push sur un autre repository

    -> Pour ça, il faut que le propriétaire du repository vous ai ajouté en colloborateur dans la section "settings" -> "manage-access"
    
    

    
