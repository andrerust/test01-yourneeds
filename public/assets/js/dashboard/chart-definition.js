'use strict';

var lineDataOne = [
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor()
];
var lineDataTwo = [
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor(),
   randomScalingFactor()
];

var chart1 = [];
lineDataOne.forEach(function (entry) {
   chart1.push('<td class="text-right">' + entry + '</td>');
});
$('#chart-1').replaceWith(chart1);

var chart2 = [];
lineDataOne.forEach(function (entry) {
   chart2.push('<td class="text-right">' + entry + '</td>');
});
$('#chart-2').replaceWith(chart2);

$(document).ready(function () {
   /*================================================
    > CHARTS
    ================================================*/
   /*================================================
    >> LINE
    ================================================*/
   var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
   var configLine = {
      type: 'line',
      data: {
         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
         datasets: [{
            label: 'Anzahl Nutzer',
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data: lineDataOne,
            fill: false,
         }, {
            label: 'Anzahl Versicherungen',
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data: lineDataTwo
         }]
      },
      options: {
         responsive: true,
         title: {
            display: true,
            text: 'Statistiken'
         },
         tooltips: {
            mode: 'index',
            intersect: false,
         },
         hover: {
            mode: 'nearest',
            intersect: true
         },
         scales: {
            xAxes: [{
               display: true,
               scaleLabel: {
                  display: true,
                  labelString: 'Monat'
               }
            }],
            yAxes: [{
               display: true,
               scaleLabel: {
                  display: true,
                  labelString: 'Anzahl'
               }
            }]
         }
      }
   };

   var configPie = {
      type: 'pie',
      data: {
         datasets: [{
            data: [
               randomScalingFactor(),
               randomScalingFactor(),
               randomScalingFactor(),
               randomScalingFactor(),
               randomScalingFactor()
            ],
            backgroundColor: [
               window.chartColors.red,
               window.chartColors.orange,
               window.chartColors.yellow,
               window.chartColors.green,
               window.chartColors.blue
            ],
            label: 'Dataset 1'
         }],
         labels: [
            'PHP',
            'PKV',
            'HPF',
            'KFZ',
            'GEB'
         ]
      },
      options: {
         responsive: true
      }
   };
   window.onload = function () {
      var ctx = document.getElementById('canvas-line').getContext('2d');
      window.myLine = new Chart(ctx, configLine);

      var ctx = document.getElementById('canvas-pie').getContext('2d');
      window.myLine = new Chart(ctx, configPie);
   };
   /*
    document.getElementById('addData').addEventListener('click', function () {
    if (config.data.datasets.length > 0) {
    var month = MONTHS[config.data.labels.length % MONTHS.length];
    config.data.labels.push(month);

    config.data.datasets.forEach(function (dataset) {
    dataset.data.push(randomScalingFactor());
    });

    window.myLine.update();
    }
    });

    document.getElementById('removeData').addEventListener('click', function () {
    config.data.labels.splice(-1, 1); // remove the label first

    config.data.datasets.forEach(function (dataset) {
    dataset.data.pop();
    });

    window.myLine.update();
    });

    document.getElementById('randomizeData').addEventListener('click', function () {
    config.data.datasets.forEach(function (dataset) {
    dataset.data = dataset.data.map(function () {
    return randomScalingFactor();
    });

    });

    window.myLine.update();
    });

    document.getElementById('removeDataset').addEventListener('click', function () {
    config.data.datasets.splice(0, 1);
    window.myLine.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function () {
    var colorName = colorNames[config.data.datasets.length % colorNames.length];
    var newColor = window.chartColors[colorName];
    var newDataset = {
    label: 'Dataset ' + config.data.datasets.length,
    backgroundColor: newColor,
    borderColor: newColor,
    data: [],
    fill: false
    };

    for (var index = 0; index < config.data.labels.length; ++index) {
    newDataset.data.push(randomScalingFactor());
    }

    config.data.datasets.push(newDataset);
    window.myLine.update();
    });
    */
});