<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title></title>
</head>
<body>

    <ul>
        <li><a href="../controllers/controller-gallery.php">Galerie</a></li>
        <li><a href="../controllers/controller-upload.php">Téléverser</a></li>
        <li><a href="../controllers/controller-profil.php">Profil</a></li>
        <li><a href="../controllers/controller-login.php?logout">Déconnexion</a></li>
    </ul>

    <p>Bonjour <?= $_SESSION['user']['username'] ?></p>
</body>
</html>