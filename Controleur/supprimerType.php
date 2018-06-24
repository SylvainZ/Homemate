<?php
session_start();

if (isset($_GET['idSupTypCapteur'])||isset($_GET['idSupTypActionneur'])){
    include('Modele/supprimerType.php');
}

else{
    include('Vue/administrateurCA.php');
}
?>
