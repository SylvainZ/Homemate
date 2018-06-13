<?php

if(isset($_GET['ID'])&&!empty($_GET['ID'])) {
    include('Modele/connexionBD.php');
    
    $req3 = $bdd->query('SELECT *    FROM piece WHERE ID_logement =\'' . $_GET['ID'] . '\'');
    $nomPiece= $bdd->query('SELECT piece.ID FROM piece INNER JOIN capteur ON piece.ID=capteur.idpiece');
    
    while ($donnees1 = $req3->fetch()){
      
     
    $req4 = $bdd->query('DELETE FROM capteur WHERE idpiece ='.$donnees1['ID'] );
    
}
    $req1 = $bdd->query('DELETE FROM logement WHERE ID=\'' . $_GET['ID'] . '\'');
    $req2 = $bdd->query('DELETE FROM piece WHERE ID_logement =\'' . $_GET['ID'] . '\'');
include('Vue/habitations.php');
}
else {
include('Vue/habitations.php');
}
?>