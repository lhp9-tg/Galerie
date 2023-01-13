<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Envoi de photos par formulaire</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <h1>Upload</h1>

    <span><?= $error ?? '' ?></span>

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




</body>

</html>