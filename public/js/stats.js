$(document).ready(function() {
    $.get('/datosporhora', function (data) {
        for (var d in data){
            console.log(data[d].med);
        }
    });
});

function graficoHoras(){
    $.get('/datosporhora', function (data) {
        for (var d in data){
            console.log(data[d].med);
        }
    });
}
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