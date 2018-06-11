<?php
//pour que la réponse s'affiche comme du texte brut
header('Content-Type: text/plain');
 
/*partie à modifier*/
$name = 'www.site.com';//nom du site
/*
http/GET
projets-tomcat.isep.fr:8080/appService*/
 
//pour ne pas devoir calculer à la main la longueur du corps, on le stocke dans une variable et la fonction strlen() nous la donne.
$data = 'variable=valeur&variable2=valeur2';
 
//la requête
$envoi  = "GET / HTTP/1.1\r\n"; //GET demande une ressource (sans effet sur la ressource)
/*
$envoi .= "Host: ".$name."\r\n"; //à spécifier si il y a plusieur site sur un même serveur et du coup avec une même adresse ip

$envoi .= "Connection: Close\r\n";
//Connection: Close|Keep-Alive
//Définit le type de connexion :
    //Close : la connexion est fermée après la réponse
    //Keep-Alive : crée une connexion persistante. Avec ce type de connexion, il est même possible d'envoyer une requête sans attendre la réponse à la précédente.

$envoi .= "Content-type: application/x-www-form-urlencoded\r\n"; // Spécifie le type MIME du corps de requête, il sera très utile dans le cas d'une requête POST.

$envoi .= "Content-Length: ".strlen($data)."\r\n\r\n"; //Spécifie la longueur du corps de requête.
*/

$envoi .= $data."\r\n"; // envoie des variable GET via l'url
/*/partie à modifier*/
 
/*ouverture socket*/
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if($socket < 0){
        die('FATAL ERROR: socket_create() : " '.socket_strerror($socket).' "');
}
 
if (socket_connect($socket,gethostbyname($name),80) < 0){
        die('FATAL ERROR: socket_connect()');
}
/*/ouverture socket*/
 
/*envoi demande*/
if(($int = socket_write($socket, $envoi, strlen($envoi))) === false){
        die('FATAL ERROR: socket_write() failed, '.$int.' characters written');
}
/*/envoi demande*/
 
/*lecture réponse*/
$reception = '';
while($buff = socket_read($socket, 2000)){
   $reception.=$buff;
}
echo $reception;
/*/lecture réponse*/
 
socket_close($socket);
?>
