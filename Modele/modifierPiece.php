
<?php
if (isset($_POST['nom'])&&isset($_POST['superficie'])){
    include('connexionBD.php');
    $req = $bdd->prepare('UPDATE piece SET Nom=?, Superficie=? WHERE ID = ?');
    $req->execute(array(
        $_POST['nom'],
        $_POST['superficie'],
        $_GET['ID']
    ));

    header('Location:index.php?cible=piece&ID='.$_GET['id']);
}
else{
   
    header('Location:index.php?cible=piece&ID='.$_GET['id']);
} ?>