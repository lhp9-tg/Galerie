<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Connexion</title>
</head>

<body>
    <div id="container">

        <div>
            <?php
                if (isset($disconnected)) {
                    echo 'Vous avez bien été déconnecté'; ?>
                    <a href="../controllers/controller-login.php">Retour à l'accueil</a>
            <?php
                }
            ?>
        </div>

        <div>
            <?php
                if (!isset($disconnected)) { ?>
                    
                    <form action="" method="POST" novalidate>
                    <h1>Connexion</h1>

                    <div class="labels">
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                    <br>
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                    <br>
                    <input type="submit" id='submit' value='LOGIN'>

                    <?php foreach ($errors as $key => $value) { ?>
                        <p><?= $value ?></p>
                    <?php } ?>

                    </div>
                </form>
                <?php }
            ?>
        </div>
    </div>

</body>

</html>