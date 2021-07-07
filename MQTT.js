/********************** Esta sección queda dedicada exclusiamente Constantes Globales ********************************************************************/

//definiciones del broker
var servidorMqtt="arcanum.servebeer.com";
var puertoMqtt=9001;
var idUsuarioMqtt="ws0303456";
var usuario="guille";
var password="Elmundo21";

//Definciones de valores de los sensores
var temperaturaSensor1;




/********************** Esta sección queda dedicada exclusiamente  al manejo de los gráficos  de sensores********************************************************************/
/*

Estructura de llamado de los gráficos en html
<div id="canvas-holder" style="width: 50%">
    <canvas id="canvas"></canvas>
  </div> */



//Grafica del sensor de temperatura 1


var config= {
type: 'gauge',
data: {
datasets: [{
  value: 0,
  minValue: 0,
  data: [25, 50, 75, 100],
  backgroundColor: ['green', 'yellow', 'orange', 'red'],
}]
},
options: {
needle: {
  radiusPercentage: 2,
  widthPercentage: 3.2,
  lengthPercentage: 80,
  color: 'rgba(0, 0, 0, 1)'
},
valueLabel: {
  display: true,
  formatter: (value) => {
    return  Math.round(value);
  },
  color: 'rgba(255, 255, 255, 1)',
  backgroundColor: 'rgba(0, 0, 0, 1)',
  borderRadius: 5,
  padding: {
    top: 10,
    bottom: 10
  }
}
}

}

//definición del gráfico




if(!!document.getElementById("TemperaturaSensor1").getContext("2d")){
    var chart = new Chart(document.getElementById("TemperaturaSensor1").getContext("2d"),config );
}
if(!!document.getElementById("TemperaturaSensor2").getContext("2d")){
    var chart = new Chart(document.getElementById("TemperaturaSensor2").getContext("2d"),config );
}




/********************** Esta sección queda dedicada exclusiamente  al manejo de los eventos MQTT ********************************************************************/

// Create a client instance
client = new Paho.MQTT.Client(servidorMqtt, puertoMqtt, idUsuarioMqtt);

// set callback handlers
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

// connect the client
client.connect({
    onSuccess:onConnect,
    userName:usuario,
    password:password
});


// called when the client connects
function onConnect() {
  document.getElementById("estadoConexion").className="nav-item bg-success";
  console.log("onConnect");
  //listado de tópicos de suscripción
  client.subscribe("cerveceria/mediciones/sensorOlla");

  message = new Paho.MQTT.Message("PRECALENTADO");
  message.destinationName = "cerveceria/operaciones/precalentado";
  client.send(message);
}

// called when the client loses its connection
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:"+responseObject.errorMessage);
    document.getElementById("estadoConexion").className="nav-item bg-success";
  }
}

// called when a message arrives
function onMessageArrived(message) {
  console.log("onMessageArrived:"+message.payloadString);

  //filtrado de los distintos mensajes que llegan de los diversos tópicos de subscripción
  if (message.destinationName=="cerveceria/mediciones/sensorOlla"){

      temperaturaSensor1= parseFloat(message.payloadString);
      config.data.datasets[0].value= temperaturaSensor1;
      window.chart.update();

  }

}



/********************** Esta sección queda dedicada exclusiamente  al manejo de los eventos de operaciones ********************************************************************/
/*
document.getElementById("switch-label").addEventListener('change',function(){
if (document.getElementById("switch-label").checked==true) {
encender();

}else{
  apagar();
}

});

function encender(){
  //client.subscribe("World");
  message = new Paho.MQTT.Message("LAVAR");
  message.destinationName = "cerveceria/operaciones/lavadoOk";
  client.send(message);
}

function apagar(){
  //client.subscribe("World");
  message = new Paho.MQTT.Message("CANCELAR");
  message.destinationName = "cerveceria/operaciones/lavadoOk";
  client.send(message);
}
*/