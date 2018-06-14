<?php

include('connexionBD.php');
$bdd->exec('UPDATE `messagerie` SET `Consulte`=1 WHERE ID='.$_SESSION['id'][$_GET['message']]);

?>