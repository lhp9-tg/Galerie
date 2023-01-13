<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location : ../controllers/controller-profil.php');
    exit();
}

if (isset($_POST['modeChosen'])) {
    $mode = $_POST['mode'];

    setcookie('cookieMode', $mode, time()+3600, '/'); 
    
}

function checkquota() {

    $dir = '../assets/img/'.$_SESSION['user']['username'].'/';
    $files = array_diff(scandir($dir), array('..', '.'));
    $usedsize = 0;

    foreach($files as $file) {
        $usedsize = $usedsize + filesize($dir.$file);
    }

    $usedsize = $usedsize/(1024*1024);
    $currentquota = $_SESSION['user']['quota'] - $usedsize;
    
    return $currentquota; 
}

include('../include/navbar.php');
include('../views/view-profil.php');
?>