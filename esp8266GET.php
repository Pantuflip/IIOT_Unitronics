<?php
  $Temp=$_GET["temperature"];
  //create a variable that will receive the temperature
  $Humidity=$_GET["humidity"];
  //create a variable tat will receive the huminity
  $Write="<p>Temperature : " . $Temp . " Celcius </p>" . "<p>Humidity : " . $Humidity . " % </p>";
  //create an HTML file to display the data within
//file_put_contents('sensor.html',$Write);
 $fileStatus=file_put_contents('/ResultPrueba/MetodoGET.html',$Write);
	if ($fileStatus != false ) {
		echo("Registro adicionado Correctamente.");
	} else {
		echo("Falla, no se proceso el archivo.");
	}

 ?>
