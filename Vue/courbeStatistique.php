
<!DOCTYPE html>
<head>
    <title>
        Courbe
    </title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">

    </script>
</head>
<body>

<div id="chart_div<?php echo $donnees1['id']?>"></div>



</body>


<script>
    google.charts.load('current', {'packages':['line', 'corechart']});
    google.charts.setOnLoadCallback(drawChart);

//setInterval('drawChart()',2000);

    function drawChart() {

        var chartDiv = document.getElementById('chart_div<?php echo $donnees1['id']?>');

        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', "Distance de l'objet");//légende de la courbe

        /*tableau de valeur à afficher */
        data.addRows([

            <?php
            while($reponse=$req1->fetch()){ //boucle while qui parcourt toute les trames de la base de donnees
                if($reponse['typeCapteur']==7) {//condition sur le type de capteur de la trame
                    if (true|| $reponse['dateFrame'] == date('Y-m') . '-' . (date('d') - 1)) {//condition sur la date de la trame
                        echo '[new Date(' .
                            $reponse['dateFrame'][0] . $reponse['dateFrame'][1] . $reponse['dateFrame'][2] . $reponse['dateFrame'][3] . ',' .    //annees
                            $reponse['dateFrame'][5] . $reponse['dateFrame'][6] . ',' .                                                      //mois
                            $reponse['dateFrame'][8] . $reponse['dateFrame'][9] . ',' .                                                      //jour
                            $reponse['heure'][0] . $reponse['heure'][1] . ',' .                                                              //heure
                            $reponse['heure'][3] . $reponse['heure'][4] . ',' .                                                              //minute
                            $reponse['heure'][6] . $reponse['heure'][7] . '),' .                                                             //seconde
                                32076.69016894*pow(hexdec($reponse['valeurCapteur']), -1.245865753) . '],';                                                                     //valeur capteur
                    }
                }
            }
            ?>
        ]);


        var materialOptions = {
            chart: {
                title: 'Distance par rapport au capteur'// titre de la courbe
            },
            width: 900,
            height: 500,
            series: {
                0: {axis: 'Temps'}//titre de l'axe des abscisse
            },
            axes: {
                //titre de l'axe des ordonnees
                y: {
                    Temps: {label: 'Distance (en cm)'}
                }
            }
        };

        function drawMaterialChart() {
            var materialChart = new google.charts.Line(chartDiv);
            materialChart.draw(data, materialOptions);
        }

        drawMaterialChart();
    }

</script>


