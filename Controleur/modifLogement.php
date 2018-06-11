<?php
session_start();
if (isset($_GET['ID'])&&!empty($_GET['ID'])){
    require('Modele/modifierLogement.php');
}

else{
//include('Vue/modifierLogement.php');
    echo 'ça ne marche pas';
}
?>


