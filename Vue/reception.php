<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
function testImage($chemin)
{
if (isset($_FILES[$chemin]) AND $_FILES[$chemin]['error'] == 0)
  {
  // Testons si le fichier n'est pas trop gros
    if ($_FILES[$chemin]['size'] <= 1000000)
    {
    // Testons si l'extension est autorisée
    $infosfichier = pathinfo($_FILES[$chemin]['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees))
      {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES[$chemin]['tmp_name'], 'images/' . basename($_FILES[$chemin]['name']));
      echo "L'envoi a bien été effectué !";
      }
    }
  }
}

testImage('case1');
testImage('case2');
testImage('case3');
testImage('case4');

  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
      die('Erreur : '.$e->getMessage());
  }
  $bdd->exec('UPDATE `accueilimage` SET `Chemin`=\''.$_FILES['case1']['name'].'\' WHERE ID=1');
  $bdd->exec('UPDATE `accueilimage` SET `Chemin`=\''.$_FILES['case2']['name'].'\' WHERE ID=2'); 
  $bdd->exec('UPDATE `accueilimage` SET `Chemin`=\''.$_FILES['case3']['name'].'\' WHERE ID=3'); 
  $bdd->exec('UPDATE `accueilimage` SET `Chemin`=\''.$_FILES['case4']['name'].'\' WHERE ID=4');
?>