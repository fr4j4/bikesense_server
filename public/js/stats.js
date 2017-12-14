$(document).ready(function() {

    $.get('/datospordia', function (data) {
        var sensor1 = [];
        var sensor2 = [];
        var dias = [];
        var placa = [];
        for (var d in data){
            placa.push(data[d].client_id);
            dias.push(data[d].day);
            encontrado=false;
            for( i in sensores){
                s=sensores[i];
                if(s.id==data[d].sensor_id){
                    encontrado=true;
                }
            }
            if(!encontrado){
                sensores.push({
                    id:data[d].sensor_id,
                    mediciones:[0,0,0,0,0,0,0],
                })
            }
        }


        for(var i in data){
            sensor=undefined
            dato=data[i];
            for(j in sensores){
                if(sensores[j].id===dato.sensor_id){
                    sensor=sensores[j]
                    break
                }
            }
            if(sensor){
                sensor.mediciones[dato.day]=(dato.med/cuentadias[dato.day])*100
            }
        }

        var ctx = document.getElementById("myChart").getContext('2d');

        var datasets=[]

        for (s in sensores){
            sensor=sensores[s]
            datasets.push({
                label:'Sensor '+sensor.id,
                data:sensor.mediciones,
                backgroundColor:'rgba('+Math.floor(Math.random()*255)+','+Math.floor(Math.random()*255)+','+Math.floor(Math.random()*255)+',0.5)',
            })
        }
         
        var dataMediciones = {
          labels: ["Domingo", "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],
          datasets: datasets,
        };
         
        var chartOptions = {
          scales: {
            xAxes: [{
              barPercentage: 1,
              categoryPercentage: 0.6
            }],
            yAxes: [{
              id: "A001F20"
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

