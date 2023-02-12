<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hola mundo</h1>
    <p><?php

        $usuario = $_GET['tipo_usuario'];
        $navegador = $_GET['navegador'];
    
    
        echo "El usuario es" . $usuario . " y tiene el navegador  " . $navegador; 
    
    ?></p> 
    
    
</body>
</html>