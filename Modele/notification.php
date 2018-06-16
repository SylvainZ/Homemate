<?php
session_start();
require('connexionBD.php');
$req1=$bdd->query("UPDATE messagerie SET notif=1 WHERE notif=0");

//récupère les 5 derniers messages reçus
$req1=$bdd->query('SELECT * FROM messagerie WHERE Reception = \''.$_SESSION['email'].'\' ORDER BY ID DESC limit 5');

$response='';
while($row=$req1->fetch()) {

    $response = $response . "<div class='notification-item'>" .
        //affiche le nom d'expediteur et le sujet du message dans la liste de notification
        "<div class='notification-subject'><a href='index.php?cible=boiteMailReception'>". $row["nomExp"] . "</a></div>" .
        "<div class='notification-comment'>" . $row["Sujet"]  . "</div>" .
        "</div>";
}
if(!empty($response)) {
    print $response;
}

?>