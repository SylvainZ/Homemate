<?php

$req = $bdd->prepare("UPDATE profil SET ID_logement_sec=? WHERE Statut= ? ");
$req->execute(array(
$_SESSION['idHadA'][$_GET['logement']],
'secondaire-'.$_SESSION['ID']
));
header('Location:index.php?cible=habitationsAutorisation');

?>