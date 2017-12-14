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
                    mediciones2:[0,0,0,0,0,0,0],
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
                sensor.mediciones2[dato.day]=dato.med
                sensor.mediciones[dato.day]=(dato.med/cuentadias[dato.day])*100
            }
        }

        var ctx = document.getElementById("myChart").getContext('2d');
        var ctx2 = document.getElementById("myChart2").getContext('2d');

        var datasets=[]
        var datasets2=[]

        for (s in sensores){
            sensor=sensores[s]
            color=[Math.floor(Math.random()*255),Math.floor(Math.random()*255),Math.floor(Math.random()*255)]
            datasets.push({
                label:'Sensor '+sensor.id,
                data:sensor.mediciones,
                backgroundColor:'rgba('+color[0]+','+color[1]+','+color[2]+',0.5)',
            })

            datasets2.push({
                label:'Sensor '+sensor.id,
                data:sensor.mediciones2,
                backgroundColor:'rgba('+color[0]+','+color[1]+','+color[2]+',0.5)',
            })
        }
         
        var dataMediciones = {
          labels: ["Domingo", "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],
          datasets: datasets,
        };

        var dataMediciones2 = {
          labels: ["Domingo", "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],
          datasets: datasets2,
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

        var barChart2 = new Chart(ctx2, {
          type: 'bar',
          data: dataMediciones2,
          options: chartOptions
        });

    });
});

