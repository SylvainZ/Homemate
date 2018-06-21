<?php
session_start();
//include('../Modele/connexion.php');
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=011E"
);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);

function envoieTrameBDD()
{   /** 15(Trame) + (date) */
    $TRA = "1";
    $OBJ1 = "0";
    $OBJ2 = "1";
    $OBJ3 = "1";
    $OBJ4 = "E";
    $REQ = "2";
    $TYP = "5";
    $NUM1 = "0";
    $NUM2 = "1";

    $ValeurAns="1";

    $ANS1 = $ValeurAns;
    $ANS2 = $ValeurAns;
    $ANS3 = $ValeurAns;
    $ANS4 = $ValeurAns;

    $CHK1 = "0";
    $CHK2 = "0";
    $TRAME=array($TRA,$OBJ1,$OBJ2,$OBJ3 ,$OBJ4 ,$REQ ,$TYP ,$NUM1 ,$NUM2 ,$ANS1 ,$ANS2 ,$ANS3 ,$ANS4 ,$CHK1 ,$CHK2 );

    $CHECK=0;
    foreach($TRAME as $valeur){
        $CHECK+=hexdec($valeur);
    }

    $CHECK_tab = str_split(dechex($CHECK), 1);
    $CHK1 = $CHECK_tab[0];
    $CHK2 = $CHECK_tab[1];


    $TRAME=array($TRA,$OBJ1,$OBJ2,$OBJ3 ,$OBJ4 ,$REQ ,$TYP ,$NUM1 ,$NUM2 ,$ANS1 ,$ANS2 ,$ANS3 ,$ANS4 ,$CHK1 ,$CHK2 );
    //print_r($TRAME);
    $TRAME_CONC="";
    foreach($TRAME as $valeur){
        $TRAME_CONC.=$valeur;
    }
    echo $TRAME_CONC;

    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=011E&TRAME=".$TRAME_CONC
    );
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    //echo "envoyé";
}

envoieTrameBDD();


//include('../Modele/donneesPasserelle.php');

?>

