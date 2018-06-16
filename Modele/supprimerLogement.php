<?php

if(isset($_GET['ID'])&&!empty($_GET['ID'])) {

    //appelle la BDD homemate
    include('connexionBD.php');

    //sélectionne les pièces correspondant à l'ID
    $req3 = $bdd->query('SELECT *    FROM piece WHERE ID_logement =\'' . $_GET['ID'] . '\'');
    $nomPiece= $bdd->query('SELECT piece.ID FROM piece INNER JOIN capteur ON piece.ID=capteur.idpiece');
    
    while ($donnees1 = $req3->fetch()){
      
     //supprime les capteurs appartenant aux pièces
    $req4 = $bdd->query('DELETE FROM capteur WHERE idpiece ='.$donnees1['ID'] );
    
}   //supprime les pièces et le logement
    $req1 = $bdd->query('DELETE FROM logement WHERE ID=\'' . $_GET['ID'] . '\'');
    $req2 = $bdd->query('DELETE FROM piece WHERE ID_logement =\'' . $_GET['ID'] . '\'');

    //renvoie vers la page habitation
    include('Vue/habitations.php');
}
else {
    //renvoie vers la page habitation sans avoir supprimé
    include('Vue/habitations.php');
}
?>