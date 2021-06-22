<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= URL ;?>">E-Commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <?php 
                        if (!userIsConnect()){
                            // Inscription et connexion n'apparaitrons QUE si l'utilisateur n'est pas connecté
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= URL; ?>inscription.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL; ?>connexion.php">Connexion</a>
                            </li>
                            <?php
                        }
                    
                    if (userIsConnect()){
                        // Profil n'apparait que si l'utilisateur est connecté
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL; ?>profil.php">Profil</a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL; ?>produit.php">Produit</a>
                    </li>
                    <?php
                    if (userIsConnect()){
                        // Deconnexion n'apparait que si l'utilisateur est connecté
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL; ?>?action=deconnexion">Deconnexion</a>
                        </li>
                        <?php
                    }
                    if (adminIsConnect()){
                        // Administration n'apparait que si l'utilisateur est connecté
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL; ?>admin">Administration</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="conteneurMsg">
    <?= $msg ?>
</div>


