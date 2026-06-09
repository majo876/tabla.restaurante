<?php
include("../DB/conexion.php");

if (!isset($_POST['identificacion']) || empty($_POST['identificacion']) || !is_numeric($_POST['identificacion'])){
    die("id no valida");
}

$identificacion = $_POST['identificacion'];
  $nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$grado = $_POST['grado'];
$direccion = $_POST['direccion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$modalidad = $_POST['modalidad'];
$jornada = $_POST['jornada'];
$id_rol = $_POST['id_rol'];

$sql = "UPDATE usuario SET nombre = ?, apellido = ?, grado = ?, direccion = ?, fecha_nacimiento = ?,
email = ?, modalidad = ?, jornada = ?, id_rol = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nombre, $apellido, $grado, $direccion, $fecha_nacimiento, $email, $modalidad,
$jornada, $id_rol]);

header("location: lista.php");
exit();
?>