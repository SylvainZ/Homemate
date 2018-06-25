<?php
session_start();
if(isset($_GET['idSuppressionCapteur'])&&!empty($_GET['idSuppressionCapteur'])) {
    include("Modele/supprimerCapteur.php");
}

elseif (isset($_GET['idSuppressionActionneur'])&&!empty($_GET['idSuppressionActionneur'])){
    include('Modele/supprimerActionneur.php');
}
    ?> 