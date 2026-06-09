<?php

include("../DB/conexion.php");

if(!isset($_POST['identificacion']) || empty($_POST['identificacion']) || !is_numeric($_POST['identificacion'])) {
    die("id de usuario no valido");
}

$identificacion = $_POST['identificacion'];

$sql = "DELETE FROM usuario WHERE identificacion = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$identificacion]);

header("location: lista.php");
exit();

?>