<?php

require('connexionBD.php');
$req1=$bdd->query("UPDATE messagerie SET status=1 WHERE status=0");

$req1=$bdd->query("SELECT * FROM messagerie ORDER BY ID DESC limit 5");

$response='';
while($row=$req1->fetch()) {

    $response = $response . "<div class='notification-item'>" .
        "<div class='notification-subject'><a href='index.php?cible=pageMessage&message=".$row['ID']."'>". $row["nomExp"] . "</a></div>" .
        "<div class='notification-comment'>" . $row["Sujet"]  . "</div>" .
        "</div>";
}
if(!empty($response)) {
    print $response;
}
//require('boiteReceptionRecherche.php');
?>