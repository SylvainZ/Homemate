<?php

include('connexionBD.php');

insererTrameBDD($data,$bdd);
analyseTrame($bdd);

    $req1 = $bdd->query('SELECT * FROM passerelle');/* WHERE typeDeTrame=\''.$t.'\'
                        && numObjet=\''.$o.'\'
                        && typeRequete=\''.$r.'\'
                        && typeCapteur=\''.$c.'\'
                        && numCapteur=\''.intval($n).'\'
                        && valeurCapteur=\''.$v.'\'
                        && numDeTrame=\''.$a.'\'
                        && checksum=\''.$x.'\'
                        && dateFrame=\''.$year.'-'.$month.'-'.$day.'\'
                        && heure=\''.$hour.':'.$min.':'.$sec.'\''*/
    $reponse=$req1->fetch();


include('../Vue/courbeStatistique.php');
?>