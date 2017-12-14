$(document).ready(function() {
    $.get('/datospordia', function (data) {
        var sensor1 = [];
        var sensor2 = [];
        var dias = [];
        var placa = [];
        for (var d in data){
            placa.push(data[d].client_id);
            dias.push(data[d].day);
            if(data[d].sensor_id=="A001F20")
                sensor1.push(data[d].med);
            if(data[d].sensor_id=="A001F43")
                sensor2.push(data[d].med);
        }
        var ctx = document.getElementById("myChart").getContext('2d');

        var data1 = {
          label: 'Sensor A001F20',
          data: sensor1,
          backgroundColor: 'rgba(54, 162, 235, 0.5)',
          borderColor: 'rgba(54, 162, 235, 1)',
          yAxisID: "A001F20"
        };
         
        var data2 = {
          label: 'Sensor A001F43',
          data: sensor2,
          backgroundColor: 'rgba(99, 132, 0, 0.5)',
          borderColor: 'rgba(99, 132, 0, 1)',
          yAxisID: "Sensor A001F43"
        };
         
        var dataMediciones = {
          labels: ["Domingo", "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],
          datasets: [data1, data2]
        };
         
        var chartOptions = {
          scales: {
            xAxes: [{
              barPercentage: 1,
              categoryPercentage: 0.6
            }],
            yAxes: [{
              id: "A001F20"
            }, {
              id: "Sensor A001F43"
            }]
          }
        };
         
        var barChart = new Chart(ctx, {
          type: 'bar',
          data: dataMediciones,
          options: chartOptions
        });

    });
});


/*var ctx = document.getElementById("myChart").getContext('2d');
$hoy = date('Y-m-d');
$fechas = [$hoy,$hoy-1,$hoy-2,$hoy-3,$hoy-4];
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: $fechas,
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});*/