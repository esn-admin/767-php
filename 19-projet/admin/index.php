<?php


    include("../inc/init.inc.php");
    include("../inc/functions.inc.php");

    if (!adminIsConnect()){
        header("location:" . URL);
        exit();
    }


    include("../inc/head.inc.php");
    include("../inc/header.inc.php");


    include("../inc/footer.inc.php");
