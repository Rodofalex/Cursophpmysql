<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arreglos</title>
  </head>
  <style media="screen">
    body{
      body{
        background-color: #E85F79;
        text-align: center;
      }
    }
  </style>
  <body>
    <?php
      $frutas = array("platano", "manzanas", "uvas", "fresas" );

      print_r($frutas);

      echo "<br>";

      echo $frutas[3];

      echo "<br>";

      echo count($frutas). " elementos";

      echo "<br>";

      for ($i=0; $i < count($frutas); $i++) {
        echo $frutas[$i]."<br>" ;
      }

      echo $frutas [2] . "<br>";

      $edades = array("Marcos" => 34, "Luis" => 23, "Omar" => 27);

      print_r($edades);

      echo "<br>";

      echo $edades["Luis"];

      echo "<br>";

      foreach ($edades as $key => $value) {
        echo $key. " tiene " . $value. " años de edad<br>";
      }
      
      echo "<br><br>";

      $cars = array("Corsa" => "Chevrolet", "Logan" => "Reanault", "Supra" => "TOYOTA", "Fiesta" => "Ford");

      print_r($cars);
      
      echo "<br>";

      echo $cars["Corsa"]. "<br>";

      foreach($cars as $modelo => $marca){
        echo $modelo. " es marca ". $marca. "<br>";         
      }
    ?>

  </body>
</html>
