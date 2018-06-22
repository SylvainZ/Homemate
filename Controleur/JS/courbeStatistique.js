google.charts.load('current', {'packages':['line', 'corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var button = document.getElementById('change-chart');
    var chartDiv = document.getElementById('chart_div');

    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Month');
    data.addColumn('number', "Average Temperature");

    data.addRows([

        [new Date(2014, 1, 1,1),  -.5],
        [new Date(2014, 1, 1,2),   .4],
        [new Date(2014, 1, 1,3),   .5],
        [new Date(2014, 1, 1,4),  2.9],
        [new Date(2014, 1, 1,5),  6.3],
        [new Date(2014, 1, 1,6),    9],
        [new Date(2014, 1, 1,7),  1.6],
        [new Date(2014, 1, 1,8),  -.5],
        [new Date(2014, 1, 1,9),   .4],
        [new Date(2014, 1, 1,10),  .5],
        [new Date(2014, 1, 1,11),  .9],
        [new Date(2014, 1, 1,12),  .3],
        [new Date(2014, 1, 1,13),   9],
        [new Date(2014, 1, 1,14),  .6]
    ]);

/*
*         */

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