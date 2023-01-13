<?php 

session_start();

if (!isset($_SESSION['user'])) {
    header('Location : ../controllers/controller-profil.php');
    exit();
}

function checkImage($name, $size, $format)
{

    $checkResult = [];

    if (($_FILES[$name]['error']) === 4) {
        $checkResult = [
            'status' => false, 
            'message' => 'Veuillez selectionner une image'];

    } elseif (!preg_match('/image/', mime_content_type($_FILES[$name]['tmp_name']))) {
        $checkResult = [
            'status' => false, 
            'message' => 'Veuillez VRAIMENT selectionner une image'];

    } elseif (!in_array(explode('/', $_FILES[$name]['type'])[1], $format)) {
        $checkResult = [
            'status' => false, 
            'message' => 'Les formats autorisés sont "jpg" "jpeg" "png" et "webp"'];

    } elseif (filesize($_FILES[$name]['tmp_name']) >= $size) {
        $checkResult = [
            'status' => false, 
            'message' => 'La taille de l\'image ne doit excéder 2Mo'];

    } else {
        $checkResult = [
            'status' => true,
            'status' => ''
        ];
    }

    return $checkResult;
}

function upload($name, $target_dir, $formatChosen)
{
    $uploadResult = [];
    $imagename = uniqid() .'.'. $formatChosen;

    if (move_uploaded_file($_FILES[$name]['tmp_name'], $target_dir . $imagename)) {
        $uploadResult = [
            'status' => true,
            'message' => "L'image ". htmlspecialchars(basename( $_FILES["userfile"]["name"])). " a été téléversée."];
        
    } 
    else {
        $uploadResult = [
            'status' => false,
            'message' => "Désolé, une erreur est survenue lors du téléversement."];
    }

    return $uploadResult;
}

$size = (1048576*2);
$formats = ['jpeg', 'jpg', 'png', 'webp'];
$target_dir = "../assets/img/".$_SESSION['user']['username']."/";

include('../include/navbar.php');
include('../views/view-upload.php');
?>