<?php

session_start();

if(!isset($_SESSION["usuario"])){

header("Location:index.php");

exit();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>¡BIENVENIDOS!</h1>
    <p> Sistematizacion del Restaurante Escolar.</p>
    <p> Este sistema esta creado con el proposito de mejorar el orden y es una forma mas practica 
        para poder mantener todo mas organizado y de la mejor manera</p>
<a href="restaurante/lista.php"><button>Crear</button><a>
</body>
</html>