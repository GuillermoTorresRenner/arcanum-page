/********************** Esta sección queda dedicada exclusiamente Constantes Globales ********************************************************************/

//definiciones del broker
var servidorMqtt="arcanum.servebeer.com";
var puertoMqtt=9001;
var idUsuarioMqtt="ws0303456";
var usuario="guille";
var password="Elmundo21";

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
  document.getElementById("estadoConexion").className=" bg-success text-light text-center ";
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
    document.getElementById("estadoConexion").className="bg-danger text-light text-center ";
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
