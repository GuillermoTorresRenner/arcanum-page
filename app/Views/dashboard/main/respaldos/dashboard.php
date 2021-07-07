<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prueba MQTT</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
  <script src="https://unpkg.com/chart.js@2.8.0/dist/Chart.bundle.js"></script>
  <script src="https://unpkg.com/chartjs-gauge@0.3.0/dist/chartjs-gauge.js"></script>
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

  <div id="canvas-holder" style="width: 30%">
    <canvas id="TemperaturaSensor1"></canvas>
  </div>

  <br><br><br>
  <p>luces</p>
  <form >

  </form>
  <div class="switch-button">
    <!-- Checkbox -->
    <input type="checkbox"  id="switch-label" class="switch-button__checkbox"  >
    <!-- Botón -->
    <label for="switch-label" class="switch-button__label" onchange="luces()"></label>
</div>




  <script src="public/websocket/MQTT.js"></script>
</body>
</html>
