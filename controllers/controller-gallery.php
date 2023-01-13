<?php 

session_start();

$dir    = '../assets/img/'.$_SESSION['user']['username'].'/';
$scanned_directory = array_diff(scandir($dir), array('..', '.'));

include('../include/navbar.php');
include('../views/view-gallery.php');
