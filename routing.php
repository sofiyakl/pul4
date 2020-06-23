<?php
$id = null;
$id = isset($_GET['id']) ? $_GET['id'] : '';
    switch($id){
        case 'about': {
            include 'inc/about.inc.php';
            break;
        }
        case 'gbook': {
            include 'inc/gbook.inc.php';
            break;
        }
        case 'contact': {
            include 'inc/contact.inc.php';
            break;
        }
        default: include 'inc/index.inc.php';
    }
?>
