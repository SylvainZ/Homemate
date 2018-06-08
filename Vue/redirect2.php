<?php

session_start();


if (isset($_POST["forgotPass2"])) {
    
    $connection = new mysqli("localhost", "root", "", "homemate");
    
    $email = $_SESSION['email'];
    $reponse = $connection->real_escape_string($_POST["reponse"]);
    $reponse2 = $connection->real_escape_string($_POST["reponse2"]);
    $subject= "Mot de passe";
    
    $data = $connection->query("SELECT id FROM profil WHERE email='$email' AND (reponse='$reponse' AND (reponse2='$reponse2')) ");
    
    if ($data->num_rows > 0) {
        $str = $_POST["mdp"];
        
        $password = sha1($str);
        
        $connection->query("UPDATE profil SET password = '$password'  WHERE email='$email' AND (reponse='$reponse' AND (reponse2='$reponse2')) ");
        
        echo $str;
    } 
    
    else{
        echo "mail ou reponse incorect";
    }
} else {
    header("Location: connection.php");
    exit();
}
?>