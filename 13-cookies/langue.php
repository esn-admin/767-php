<a href="francais.php">Francais</a>
<a href="english.php">English</a>
<a href="italian.php">Italien</a>


<?php 

    if (isset($_COOKIE["langue"])){
        $preferenceLangue = $_COOKIE["langue"];

        if ($preferenceLangue == "francais"){
            header("location:francais.php");
            exit();
        }elseif ($preferenceLangue == "anglais"){
            header("location:english.php");
            exit();
        }elseif ($preferenceLangue == "italien"){
            header("location:italian.php");
            exit();
        }

        // echo "Je sais que votre préférence est que le site soit en $preferenceLangue"; 
    }

    

    ?>