<?php
session_start();

//vérifie si la variable logement existe
if (isset($_GET['logement'])){
    $indice=$_GET['logement'];

    //renvoie vers la page qui va lier un utilisateur secondaire et l'habitation
    include('Modele/lienLogSec.php');
}

//renvoie sur la page précédente sinon
else {

    header('Location:index.php?cible=habitationsAutorisation');
}

 ?>