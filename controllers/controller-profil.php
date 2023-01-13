<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location : ../controllers/controller-profil.php');
    exit();
}

include('../include/navbar.php');
include('../views/view-profil.php');
?>