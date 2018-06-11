<?php
//pour que la r�ponse s'affiche comme du texte brut
header('Content-Type: text/plain');
 
/*partie � modifier*/
$name = 'www.site.com';//nom du site
/*
http/GET
projets-tomcat.isep.fr:8080/appService*/
 
//pour ne pas devoir calculer � la main la longueur du corps, on le stocke dans une variable et la fonction strlen() nous la donne.
$data = 'variable=valeur&variable2=valeur2';
 
//la requ�te
$envoi  = "GET / HTTP/1.1\r\n"; //GET demande une ressource (sans effet sur la ressource)
/*
$envoi .= "Host: ".$name."\r\n"; //� sp�cifier si il y a plusieur site sur un m�me serveur et du coup avec une m�me adresse ip

$envoi .= "Connection: Close\r\n";
//Connection: Close|Keep-Alive
//D�finit le type de connexion :
    //Close : la connexion est ferm�e apr�s la r�ponse
    //Keep-Alive : cr�e une connexion persistante. Avec ce type de connexion, il est m�me possible d'envoyer une requ�te sans attendre la r�ponse � la pr�c�dente.

$envoi .= "Content-type: application/x-www-form-urlencoded\r\n"; // Sp�cifie le type MIME du corps de requ�te, il sera tr�s utile dans le cas d'une requ�te POST.

$envoi .= "Content-Length: ".strlen($data)."\r\n\r\n"; //Sp�cifie la longueur du corps de requ�te.
*/

$envoi .= $data."\r\n"; // envoie des variable GET via l'url
/*/partie � modifier*/
 
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
 
/*lecture r�ponse*/
$reception = '';
while($buff = socket_read($socket, 2000)){
   $reception.=$buff;
}
echo $reception;
/*/lecture r�ponse*/
 
socket_close($socket);
?>
