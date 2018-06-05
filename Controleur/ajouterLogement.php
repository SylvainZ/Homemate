<?php
session_start();
if (isset($_POST['type'])){
    include('Modele/ajouterLogement.php');
}

else{
    include('Vue/AjouterLogement.php');
}

?>