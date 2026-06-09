<?php
include("../DB/conexion.php");

if (!isset($_POST['identificacion']) || empty($_POST['identificacion']) || !is_numeric($_POST['identificacion'])){
    die("id no valida");
}

$identificacion = $_POST['identificacion'];

$sql = "SELECT * FROM usuario WHERE identificacion = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$identificacion]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$usuario) {
    die("usuario no encontrado");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar_actualizacion.php" method="POST">
    <input type="hidden" name="identificacion" value="<?= htmlspecialchars($identificacion) ?>">
        
    <label for="nombre">Nombre:</label>
    <input type="text" identificacion="nombre" name="nombre"
           value="<?= htmlspecialchars($usuario['nombre']) ?>" required><br><br>

    <label for="apellido">apellido:</label>
    <input type="text" id="apellido" name="apellido"
           value="<?= htmlspecialchars($usuario['apellido']) ?>" required><br><br>

    <label for="grado">grado:</label>
    <input type="text" id="grado" name="grado" 
           value="<?= htmlspecialchars($usuario['grado']) ?>" required><br><br>

    <label for="direccion">direccion:</label>
    <input type="text" id="direccion" name="direccion" 
           value="<?= htmlspecialchars($usuario['direccion']) ?>" required><br><br>
    
    <label for="fecha_nacimiento">fecha_nacimiento:</label>
    <input type="text" id="fecha_nacimiento" name="fecha_nacimiento"
           value="<?= htmlspecialchars($usuario['fecha_nacimiento']) ?>" required><br><br>

    <label for="email">email:</label>
    <input type="text" id="email" name="email" 
           value="<?= htmlspecialchars($usuario['email']) ?>" required><br><br>

    <label for="modalidad">Modalidad:</label>
    <input type="text" id="modalidad" name="modalidad"
           value="<?= htmlspecialchars($usuario['modalidad']) ?>" required><br><br>

    <label for="jornada">jornada:</label>
    <input type="text" id="jornada" name="jornada" 
           value="<?= htmlspecialchars($usuario['jornada']) ?>" required><br><br>

    <label for="id_rol">id_rol:</label>
    <input type="text" id="id_rol" name="id_rol" 
           value="<?= htmlspecialchars($usuario['id_rol']) ?>" required><br><br>

         <button type="submit">Actualizar Usuario</button>
    </form>
</body>
</html>