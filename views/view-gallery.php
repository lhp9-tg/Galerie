<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
</head>
<body>
    <h1>Galerie</h1>

    <?php
        if (empty($scanned_directory)) {
            echo 'Votre galerie est vide.';
        }
        else {
        foreach ($scanned_directory as $key => $value) { ?>
            <img src="<?= $dir.$value ?>" alt="">        
        <?php }  
        }
        ?>


</body>
</html>