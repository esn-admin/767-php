<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Boucles en php</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <?php

//        while($condition){
            //instruction
//        }


        // while(true){
        //     echo "Salut !"; 
        // }
        
        // $i=0;

        // while($i<10){
        //     echo "Salut $i<br>";
        //     $i++;
        // }


        $j=0;

        while($j<10){
            echo $j*$j . "<br>";
            $j++;
        }

        // La boucle for

        for($i=10;$i<=20;$i++){
            echo $i . "<br>";
        }
        ?>
        <p>Exercice : Afficher les chiffres de 40 à 70</p>
        <?php
        for($i=40;$i<=70;$i++){
            echo $i . "<br>";
        }


        // 
        ?>
            <p>Exercice : Affichier les chiffres entre 40 et 100, en comptant de 2 en 2 (40,42,44...)</p>
        <?php
        for($i=40;$i<=100;$i=$i+2){
            echo "$i<br>";
        }




        

        ?>
        <h2>Afficher une liste déroulante qui affiche les années entre 1970 et 2040</h2>

        <form action="" method="get">
            <div class="conteneurListeDeroulante">
                <label for="annee">Choisissez une année : </label>
                <select name="annee" id="annee">
                    <?php
                        for($i=1970;$i<=2040;$i++){
                            // echo "<option value=\"$i\">$i</option>"; 
                           ?>

                           
                            <option value="<?= $i ?>"><?= $i ?></option>
                           <?php   

                        }
                    ?>
                
                    <!-- 
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option> 
                    -->
                </select>
            </div>
        </form>

        <!-- Creer un tableau, de 10 ligne par 10 colonne, numerotez comme suit 
        Chaque cellule contient le numero de sa ligne, et le numero de sa colonne 

        L1C1 L1C2 L1C3 L1C4 ... 
        L2C1 L2C2 L2C3 L2C4 ... 
        L3C1 L3C2 L3C3 L3C4 ...
        ...  ...  ...  ... -->

        <table border="1">
              <tbody>
                    <?php
                        for($z=1;$z<=50;$z++){ // z est le nombre de colonne
                            ?>
                            <tr>
                            <?php
                                for($i=1;$i<=20;$i++){ // i est le nombre de lignes
                                    ?>
                                        <td>L<?= $z ?>C<?= $i ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                    ?>

              </tbody>          
        </table>

         ?>

    </body>
</html>