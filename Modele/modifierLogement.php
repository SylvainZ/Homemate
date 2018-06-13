<?php
if (isset($_POST['piece'])&&isset($_POST['superficie'])){
    include('connexionBD.php');
    $req = $bdd->prepare('UPDATE logement SET NombrePiece=?, Superficie=? WHERE ID = ?');
    $req->execute(array(
            $_POST['piece'],
            $_POST['superficie'],
            $_GET['ID']
        ));

    $req->closeCursor();
    echo 'vous avez bien enregistrer les modification';
    header('Location:index.php?cible=logement&ID='.$_GET['ID']);
}
else{
   
    header('Location: Vue/modifierLogement.php&ID='.$_GET['ID']);
} ?>