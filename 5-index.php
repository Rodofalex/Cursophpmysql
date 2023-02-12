<?php

//Operadores aritmeticas
echo "OPERADORES ARITMETICAS";
echo "<br><br>";
    echo "Datos: x=5 & y=10";
    echo "<br><br>";

    $x = 5;
    $y = 10;

    echo "Suma x + y: ";
    echo $x + $y;
    echo "<br><br>";
    //Otra forma (asigan a x lo que compone y)
    echo "Suma x += y: ";
    $x += $y;
    echo $x;
    echo "<br><br>";

    echo "Resta x - y: ";
    echo $x - $y;
    echo "<br><br>";
    //Otra forma (asigan a x lo que compone y)
    echo "Resta x += y: ";
    $x -= $y;
    echo $x;
    echo "<br><br>";

    echo "Producto x * y: ";
    echo $x * $y;
    echo "<br><br>";

    echo "Division x / y: ";
    echo $x / $y;
    echo "<br><br>";

//Operadores Logicos: Para esto usamos var_dump el cual cale "bool"
echo "OPERADORES LOGICOS";
echo "<br><br>";

    var_dump($x == $y);
    echo "Porque no son iguales<br><br>";

    var_dump($x != $y);
    echo "Porque son diferentes<br><br>";

    var_dump($x >= $y);
    echo "Porque 5 no es mayor que 15<br><br>";

    var_dump($x <= $y);
    echo "Porque 5 si es menor que 15<br><br>";

    var_dump($x === $y); // El triple igual === es para compara el tipo de dato
    echo "Porque no son el mismo dato<br><br>";

    

//Operadores de Incremento
    echo "OPERADORES de Incremento";
    echo "<br><br>";
    
    echo $x++ . "<br><br>";

    echo $x . "<br><br>";

    echo $x-- . "<br><br>";

    echo $x;

?>
