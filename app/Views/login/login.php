<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcanum Home Brewery</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css" integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

</head>
<body>

<div class="container_fluid">
  <br><br>
	<div class="row">
		<div class="col-12 text-center ">
			<img src="/public/images/logoArcanum.png" alt="logo">
	  </div>
  </div>
  <br><br><br><br>
  <div class="row justify-content-center ">
      <div class="col-4 text-center">
      </div>
      <div class="col-4 text-center">
        <form action="<?php echo base_url(); ?>/login/auth" method="post">
  <div class="form-group">

    <input type="text" class="form-control" id="user " name="name" placeholder="Ingrese su usuario" required>

  </div>
  <div class="form-group">

    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su password" required>
  </div>

  <button type="submit" class="btn btn-danger">Ingresar</button>
</form>
<br>
<p style="color: red"><?php echo $mensaje ?></p>

    </div>
      <div class="col-4  ">
      </div>
  </div>
</div>


</body>
</html>
