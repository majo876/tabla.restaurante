<?php

session_start();

include("DB/conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT * FROM login WHERE usuario=?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$usuario]);

$datos = $stmt->fetch(PDO::FETCH_ASSOC);

if($datos){

    if(password_verify($password,$datos["password"])){

        $_SESSION["usuario"] = $datos["usuario"];

        header("Location: iniciar.php");

    }else{

        echo "<h2>Contraseña incorrecta</h2>";

    }

}else{

    echo "<h2>El usuario no existe</h2>";

}

?>