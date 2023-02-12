<?php
// Funciones para strings
echo "Funciones para strings:   ". "<br><br>";
$mensaje = "Hoy aprendere mucho";

// longitud
echo "Longotud:   ";
echo strlen($mensaje);
echo "<br><br>";

// Numero de palabras
echo "Numero de palabras:   ";
echo str_word_count($mensaje);
echo "<br><br>";

// Reservas
echo "Reservas:   ";
echo strrev($mensaje);
echo "<br><br>";

// Encontrar texto
echo "Encontrar texto:   ";
echo strpos($mensaje, "aprendere");
echo "<br><br>";

// Remplazar texto
echo "Remplazar texto:   ";
echo str_replace("aprendere", "nadare", $mensaje);
echo "<br><br>";

// Convertir a minuscula
echo "Convertir a minuscula:   ";
echo strtolower($mensaje);
echo "<br><br>";

//Comparar cadenas
echo "Comparar cadenas:   ";
echo strcmp("a", "b");
echo "<br><br>";

//Substraer cadena
echo "Substraer cadena:   ";
echo substr($mensaje, 10, 5);
echo "<br><br>";

//Remover espacios en blanco
echo "Remover espacios en blanco:   ";
echo trim("      hola       marco   te     espero")
 ?>
