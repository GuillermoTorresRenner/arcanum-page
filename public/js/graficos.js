/********************** Esta sección queda dedicada exclusiamente  al manejo de los gráficos  de sensores********************************************************************/
/*

Estructura de llamado de los gráficos en html
<div id="canvas-holder" style="width: 50%">
<canvas id="canvas"></canvas>
</div> */



/********************************************************
*                                                       *
*        Grafica del Volumen de Caudal de Ingreso       *
*                                                       *
*********************************************************/


var config= {
  type: 'gauge',
  data: {
    datasets: [{
      value: 0,
      minValue: 0,
      data: [70,73],
      backgroundColor: ['blue','red'],
    }]
  },
  options: {
    needle: {
      radiusPercentage: 2,
      widthPercentage: 3.2,
      lengthPercentage: 80,
      color: 'rgba(0, 0, 0, 1)',

    },
    valueLabel: {
      display: true,
      formatter: (value) => {
        return  Math.round(value);
      },
      color: 'rgba(255, 255, 255, 1)',
      backgroundColor: 'rgba(0, 0, 0, 1)',
      borderRadius: 10,
      padding: {
        top: 10,
        bottom: 10
      }

    }
  }

}

//definición del gráfico

if(!!document.getElementById("litrosCargados").getContext("2d")){
  var chart = new Chart(document.getElementById("litrosCargados").getContext("2d"),config );
}


/********************************************************
*                                                       *
*        Grafica del Volumen de Caudal de Ingreso       *
*                                                       *
*********************************************************/


var config= {
  type: 'gauge',
  data: {
    labels:["holi"],
    datasets: [{
      value: 0,
      minValue: 0,
      data: [25,30],
      backgroundColor: ['yellow','red'],
    }]
  },
  options: {
    needle: {
      radiusPercentage: 2,
      widthPercentage: 3.2,
      lengthPercentage: 80,
      color: 'rgba(0, 0, 0, 1)',

    },
    valueLabel: {
      display: true,
      formatter: (value) => {
        return  Math.round(value);
      },
      color: 'rgba(255, 255, 255, 1)',
      backgroundColor: 'rgba(0, 0, 0, 1)',
      borderRadius: 10,
      padding: {
        top: 10,
        bottom: 10
      }

    }
  }

}

//definición del gráfico

if(!!document.getElementById("caudalEntrada").getContext("2d")){
  var chart = new Chart(document.getElementById("caudalEntrada").getContext("2d"),config );
}


/********************************************************
*                                                       *
*        Grafica del Volumen de Porcentaje de llenado   *
*                                                       *
*********************************************************/


if(!!document.getElementById("%llenado").getContext("2d")){



  var pieChart = new Chart(document.getElementById("%llenado"),{
    type: 'doughnut',
    data:{
      labels:["%lleno","%vacio"],
      datasets: [
        {
          data: [0,100],
          backgroundColor: [
            "blue",
            "grey",
          ]
        },]

      },
      borderAlign:"center"


    });
  }
