<?php
session_start();
//include('../Modele/connexion.php');
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=011E"
);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);


/*function tableauLog($data)
{
    $data_tab = str_split($data, 33);
    echo "Tabular Data:<br />";
    for ($i = 0, $size = count($data_tab); $i < $size; $i++) {
        echo "Trame $i: $data_tab[$i]<br />";
    }
}*/
//tableauLog($data);
/**
 * @param $data
 * @return array*/



function insererTrameBDD($data,$bdd)
{
    $data_tab = str_split($data, 33);
    foreach($data_tab as $cle=>$element){
        $trame=$data_tab[$cle];
        // décodage avec sscanf
        list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
            sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
        /*echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");*/

        $values = array(
            $t,
            $o,
            $r,
            $c,
            intval($n),
            $v,
            $a,
            $x,
            $year.'-'.$month.'-'.$day,
            $hour.':'.$min.':'.$sec
        );
        $maintenant = "11:20:00";//date('H:i:s');
        $ilYADixMinutes = date("H:i:s", strtotime("-10 minute", strtotime($maintenant)));
        if ($year.'/'.$month.'/'.$day==date('Y/m').'/'.(date('d')-1)) {//&& $hour==date('h')
            if(($hour.':'.$min.':'.$sec)>=$ilYADixMinutes) {
                    $req1 = $bdd->query('SELECT * FROM passerelle WHERE typeDeTrame=\''.$t.'\'
                        && numObjet=\''.$o.'\'
                        && typeRequete=\''.$r.'\'
                        && typeCapteur=\''.$c.'\'
                        && numCapteur=\''.intval($n).'\'
                        && valeurCapteur=\''.$v.'\'
                        && numDeTrame=\''.$a.'\'
                        && checksum=\''.$x.'\'
                        && dateFrame=\''.$year.'-'.$month.'-'.$day.'\'
                        && heure=\''.$hour.':'.$min.':'.$sec.'\'');

                    $reponse=$req1->fetch();
               if (!(isset($reponse['ID']) && !empty($reponse['ID']))) {
                    $req = $bdd->prepare('INSERT INTO passerelle(typeDeTrame, numObjet, typeRequete, typeCapteur, numCapteur, valeurCapteur, numDeTrame, checksum, dateFrame, heure) VALUES(?,?,?,?,?,?,?,?,?,?)');
                    $req->execute($values);
                }
            }
        }
    }
}

function analyseTrame($bdd){
    $req_valeurCapteur = $bdd->query('SELECT valeurCapteur FROM passerelle ORDER BY ID DESC LIMIT 1');
    $valeurCapteur=$req_valeurCapteur->fetch();
    echo hexdec($valeurCapteur['valeurCapteur']);
}

include('../Modele/donneesPasserelle.php');

?>

