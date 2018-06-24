
<?php
session_start();

//si le formulaire a été completé alors le controleur renvoie vers le modèle de traitement de la bdd
if(isset($_POST['numero_de_serie'])&& isset($_POST['seuil'])){
    include('Modele/ajoutCapteur.php');
}

//sinon il renvoie vers le formulaire d'ajout
else{
    include('Vue/ajouterUnCapteur.php');
}

?>