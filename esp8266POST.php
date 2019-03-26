<?php
  $Temp=$_POST["temperature"];
  //create a variable that will receive the temperature
  $Humidity=$_POST["humidity"];
  //create a variable tat will receive the huminity
  $Write="<p>Temperature : " . $Temp . " Celcius </p>" . "<p>Humidity : " . $Humidity . " % </p>";
  //create an HTML file to display the data within

//file_put_contents('sensor1.html',$Write);

	$fileStatus=file_put_contents('sensorp1.html',$Write);
	if ($fileStatus != false ) {
		echo("Registro adicionado Correctamente.");
	} else {
		echo("Falla, no se proceso el archivo.");
	}



 ?>
