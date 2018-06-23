<?php

session_start();

if (isset($_GET['action']) && isset($_GET['ind'])) {

    $action=$_GET['action'];
    $ind=$_GET['ind'];

    include('Modele/gererUserSec.php');

}



else {
    header('Location:index.php?cible=autorisation');
}
