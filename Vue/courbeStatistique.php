
<!DOCTYPE html>
<head>
    <title>
    Courbe
    </title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">

        </script>
</head>
<body>

<div id="chart_div"></div>



</body>


<script>
google.charts.load('current', {'packages':['line', 'corechart']});
google.charts.setOnLoadCallback(drawChart);



function drawChart() {

    var button = document.getElementById('change-chart');
    var chartDiv = document.getElementById('chart_div');

    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Date');
    data.addColumn('number', "Distance de l'objet");


    data.addRows([
    <?php
    while($reponse=$req1->fetch()){
        if($reponse['typeCapteur']==7) {
            if ($reponse['dateFrame'] == '2018-06-21'){/*date('Y-m') . '-' . (date('d') - 1))*/
                echo '[new Date(' .
                    $reponse['dateFrame'][0] . $reponse['dateFrame'][1] . $reponse['dateFrame'][2] . $reponse['dateFrame'][3] . ',' .    //annees
                    $reponse['dateFrame'][5] . $reponse['dateFrame'][6] . ',' .                                                      //mois
                    $reponse['dateFrame'][8] . $reponse['dateFrame'][9] . ',' .                                                      //jour
                    $reponse['heure'][0] . $reponse['heure'][1] . ',' .                                                              //heure
                    $reponse['heure'][3] . $reponse['heure'][4] . ',' .                                                              //minute
                    $reponse['heure'][6] . $reponse['heure'][7] . '),' .                                                             //seconde
                    hexdec($reponse['valeurCapteur']) . '],';                                                                     //valeur capteur
            }
        }
    }
    ?>
]);


    var materialOptions = {
        chart: {
            title: 'Average Temperatures and Daylight in Iceland Throughout the Year'
        },
        width: 900,
        height: 500,
        series: {
            0: {axis: 'Temps'}
        },
        axes: {
            // Adds labels to each axis; they don't have to match the axis names.
            y: {
                Temps: {label: 'Temps (Celsius)'}
            }
        }
    };

    var classicOptions = {
        title: 'Average Temperatures and Daylight in Iceland Throughout the Year',
        width: 900,
        height: 500,
        // Gives each series an axis that matches the vAxes number below.
        series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
        },
        vAxes: {
            // Adds titles to each axis.
            0: {title: 'Temps (Celsius)'},
            1: {title: 'Daylight'}
        },
        hAxis: {
            ticks: [new Date(2014, 0), new Date(2014, 1), new Date(2014, 2), new Date(2014, 3),
                new Date(2014, 4),  new Date(2014, 5), new Date(2014, 6), new Date(2014, 7),
                new Date(2014, 8), new Date(2014, 9), new Date(2014, 10), new Date(2014, 11)
            ]
        },
        vAxis: {
            viewWindow: {
                max: 30
            }
        }
    };

    function drawMaterialChart() {
        var materialChart = new google.charts.Line(chartDiv);
        materialChart.draw(data, materialOptions);
        button.innerText = 'Change to Classic';
        button.onclick = drawClassicChart;
    }

    function drawClassicChart() {
        var classicChart = new google.visualization.LineChart(chartDiv);
        classicChart.draw(data, classicOptions);
        button.innerText = 'Change to Material';
        button.onclick = drawMaterialChart;
    }

    drawMaterialChart();
}

</script>


