<?php 
$size = (1048576*2);
$formats = ['jpeg', 'jpg', 'png', 'webp'];
$target_dir = "../assets/img/".$_SESSION['user']['username']."/";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Envoi de photos par formulaire</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <h1>Upload</h1>

    <span><?= $error ?? '' ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="userfile" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
        <br>
        <select name="format" id="format-select">
            <option value="" selected disabled>--Please choose an option--</option>
            <?php foreach ($formats as $format) { ?>
            <option value="<?= $format ?>"><?= $format ?></option>
            <?php } ?>
            
        </select>
        <br>

        <input type="submit" name="check">
        <img id="pic">
    </form>
    <!-- <button class="addform">+</button> -->


    <?php

    if (($_SERVER['REQUEST_METHOD'] === 'POST')) {

        if (isset($_POST['check'])) {

            if (isset($_POST['format'])) {

                $formatChosen = $_POST['format'];

                foreach ($_FILES as $key => $name) {
                    $result = checkImage($key, $size, $formats);
    
                    if ($result['status'] === false) {
                        $error =  $result['message'];
    
                    } else {
                        
                        $result = upload($key, $target_dir, $formatChosen);
                        $error =  $result['message'];
                        }
                }

            }
            else {
                $result = checkFormat();
            }
            
        }
    }
    ?>

    <script src='assets/js/script.js'></script>
</body>

</html>