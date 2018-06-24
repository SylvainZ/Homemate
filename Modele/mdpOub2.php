
<?php
if (isset($_POST["forgotPass"])) {

    $connection = new mysqli("localhost", "root", "", "homemate");

    $email = $connection->real_escape_string($_POST["email"]);

    //on recupère les données 'profil' et 'admin'
    $data = $connection->query("SELECT id FROM profil where email='$email'");

    $data1 = $connection->query("SELECT id FROM administrateur where email='$email'");



    //Si l'utilisateur n'est pas un admin
    if ($data->num_rows > 0) {
        $str = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        $str = str_shuffle($str); //On crée une combinaison de VARCHAR
        $str = substr($str, 0, 10);

        $password = sha1($str); //ON CRYPTE LE MOT DE PASSE

        //mise à jour du mot de passe
        $connection->query("UPDATE profil SET password ='$password'  WHERE email='$email'");

        //envoi email
        $to = $email;
        $subject = 'Nouveau mot de passe';
        $message = '
Votre nouveau mot de passe est' . ' ' . $str . '.
Votre mot de passe est confidentiel, nous
vous recommandons de ne le communiquer à
personne et d\'en changer régulièrement.

Homemate';
        $headers = 'From: domisep@isep.fr';

        mail($to, $subject, $message, $headers);

        header('location: index.php?cible=connexion');//redirection

    }
    //Si l'utilisateur est un admin
    elseif ($data1->num_rows > 0){
        $str = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        $str = str_shuffle($str); //On crée une combinaison de VARCHAR
        $str = substr($str, 0, 10);

        $password = sha1($str); //ON CRYPTE LE MOT DE PASSE

        //mise à jour du mot de passe
        $connection->query("UPDATE administrateur SET password ='$password'  WHERE email='$email'");

        $to = $email;
        $subject = 'Nouveau mot de passe';
        $message = '
Votre nouveau mot de passe est' . ' ' . $str . '.
Votre mot de passe est confidentiel, nous
vous recommandons de ne le communiquer à
personne et d\'en changer régulièrement.

Homemate';
        $headers = 'From: domisep@isep.fr';

        mail($to, $subject, $message, $headers); //fonction envoi email

        header('location: index.php?cible=connexion');

    }
    //sinon
    else {
        header('location: index.php?cible=mdpOublie');
        echo "mail ou reponse incorect";
    }
}
else {
    header("Location: connection.php");
    exit();
}
?>
