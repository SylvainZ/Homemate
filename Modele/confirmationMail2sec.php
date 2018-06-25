<?php

session_start();

if (isset($_POST["validcod"])) {
    $codaa =  $_SESSION['cod'];
    if ($_POST['code']== $codaa){
        header('Location:index.php?cible=habitationsAutorisation');

    }
    else{
        header('Location:index.php?cible=confirmationSec');
    }
}

?>