<?php

include("DB/conexion.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO login(nombre,correo,usuario,password)
VALUES(?,?,?,?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $nombre,
    $correo,
    $usuario,
    $password
]);

header("Location: index.php");

?>