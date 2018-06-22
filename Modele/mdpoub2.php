
<?php
if (isset($_POST["forgotPass"])) {

    $connection = new mysqli("localhost", "root", "", "homemate");

    $email = $connection->real_escape_string($_POST["email"]);

    $data = $connection->query("SELECT id FROM administrateur WHERE email='$email'");

    $aze =

    $user = true;

    if (isset($data) && !empty($data)) {
        $data;
    } else {
        $data = $connection->query("SELECT id FROM profil WHERE email='$email'");
        $user = false;
    }


    if ($data->num_rows > 0) {
        $str = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        $str = str_shuffle($str);
        $str = substr($str, 0, 10);

        $password = sha1($str);

        if ($user) {
            $connection->query("UPDATE administrateur SET password = '$password'  WHERE email='$email'");
        } else {
            $connection->query("UPDATE profil  SET password = '$password'  WHERE email='$email'");
        }


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

        header('location: index.php?cible=connexion');
    } else {
        header('location: index.php?cible=mdpOublie');
        echo "mail ou reponse incorect";
    }
}
else {
    header("Location: connection.php");
    exit();
}
?>
