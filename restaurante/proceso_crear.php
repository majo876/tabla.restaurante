<?php

include("../DB/conexion.php");

if($_POST){
    $sql = "INSERT INTO usuario
    (identificacion, nombre, apellido, grado, direccion, fecha_nacimiento,
    email, modalidad, jornada, id_rol)
    VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['identificacion'],
                    $_POST['nombre'],
                    $_POST['apellido'],
                    $_POST['grado'],
                    $_POST['direccion'],
                    $_POST['fecha_nacimiento'],
                    $_POST['email'],
                    $_POST['modalidad'],
                    $_POST['jornada'],
                    $_POST['id_rol']]);

    header("location: ../index.php");
}