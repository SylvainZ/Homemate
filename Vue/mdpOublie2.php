<?php
if (isset($_POST["forgotPass"])) {
    $connection = new mysqli("localhost", "root", "", "homemate");
    
    $email = $connection->real_escape_string($_POST["email"]);

    $data = $connection->query("SELECT id FROM profil WHERE email='$email'");
        
        if ($email == $_POST['email']) {

            session_start ();
            
            $_SESSION['email'] = $_POST['email'];

                     header ('location: redirect.php');
        }

        else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
        }

}
?>