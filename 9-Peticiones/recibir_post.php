<?php

    // Mostrar todos los datos del arreglo
    print_r($_POST);
    echo "<br><br>";

    //Mostrar solo lo seleccionado entre []
    print_r($_POST['usuario']. "<br><br>");
    print_r($_POST['password']. "<br><br>");


    echo "OTRA MANERA DE CONSULTAR POR MEDIO DE POST". "<br><br>";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Mostrar datos:

    echo "El suarios es:  ". $usuario. "<br>";
    echo "La contrasena es:  ". $password. "<br>";


?>