<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1>Mon appli</h1>
    <ul>
        <li>Pseudo : <?= $_SESSION['user']['username'] ?></li>
        <li>Mail : <?= $_SESSION['user']['mail'] ?></li>
        <li>Quota : <?= $_SESSION['user']['quota'] ?> Mo</li>
        <li>Espace restant : <?= number_format(checkquota(), 2) ?> Mo</li>
    </ul>

    <form action="" method="POST">
        <fieldset>
            <legend>Selectionner un mode d'affichage</legend>

            <div>
            <input type="radio" id="light" name="mode" value="light"
                    checked>
            <label for="light">Light</label>
            </div>

            <div>
            <input type="radio" id="dark" name="mode" value="dark">
            <label for="dark">Dark</label>
            </div>

            <input type="submit" name=modeChosen value="Choisir">

        </fieldset>
    </form>

    <script src="../assets/js/script.js"></script>
</body>
</html>