<?php
session_start();
if (isset($_POST['type']) && !empty($_POST['type']))
{
    include('Modele/ajouterLogement.php');
}

else{
    include('Vue/ajouterLogement.php');
}



?>