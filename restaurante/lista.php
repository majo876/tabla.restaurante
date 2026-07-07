<?php
include("../DB/conexion.php");

$sql = "SELECT * FROM usuario";
$result = $pdo->query($sql);
$usuario = $result->fetchALL();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Usuarios</h1>
    <a href="crear.php"><button>Crear Usuario</button></a>
    <table border=1>
        <tr>
            <td>identificacion</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>grado</td>
            <td>direccion</td>
            <td>fecha_nacimiento</td>
            <td>email</td>
            <td>modalidad</td>
            <td>jornada</td>
            <td>id_rol</td>
        </tr>
        <?php foreach($usuario as $u): ?>
            <tr>
                <td><?= $u['identificacion'] ?></td> 
                <td><?= $u['nombre'] ?></td> 
                <td><?= $u['apellido'] ?></td> 
                <td><?= $u['grado'] ?></td> 
                <td><?= $u['direccion'] ?></td> 
                <td><?= $u['fecha_nacimiento'] ?></td> 
                <td><?= $u['email'] ?></td> 
                <td><?= $u['modalidad'] ?></td> 
                <td><?= $u['jornada'] ?></td> 
                <td><?= $u['id_rol'] ?></td>   
            <td>
                <form action="actualizar.php" method="post">
                    <input type="hidden" name="identificacion" value="<?= $u['identificacion']?>">
                    <input type= "submit" value="editar">
                </form>

                <form action="eliminar.php" method="post">
                    <input type="hidden" name="identificacion" value="<?= $u['identificacion'] ?>">
                    <input type="submit" value="eliminar">
                </form>
        </td>
        
            <?php endforeach; ?>
            </tr>
        </table>
                 
</body>
</html>