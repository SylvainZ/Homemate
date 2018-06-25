<?php

session_start();

//confirmation mail
if (isset($_POST["validcod"])) {
    $codaa =  $_SESSION['cod'];
    if ($_POST['code']== $codaa){ //si le code saisi est la même que celui envoyé par email
        header('Location:index.php?cible=controlePerso');

    }
    else{
        header('Location:index.php?cible=confirmationAdmin');
    }
}

?>