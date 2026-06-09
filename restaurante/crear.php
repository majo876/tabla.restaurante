<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <form action="proceso_crear.php" method="POST">
        <label for="identificacion">identificacion:</label>
        <input type="text" id="identificacion" name="identificacion"required><br><br>
 
          <label for="nombre">nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

         <label for="apellido">apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

         <label for="grado">grado:</label>
        <input type="text" id="grado" name="grado" required><br><br>

         <label for="direccion">direccion:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

         <label for="fecha_nacimiento">fecha_nacimiento:</label>
        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

         <label for="email">email:</label>
        <input type="text" id="email" name="email" required><br><br>

         <label for="modalidad">modalidad:</label>
        <input type="text" id="modalidad" name="modalidad" required><br><br>

         <label for="jornada">jornada:</label>
        <input type="text" id="jornada" name="jornada" required><br><br>

         <label for="id_rol">id_rol:</label>
        <input type="text" id="id_rol" name="id_rol" required><br><br>

        <button type="submit">Crear Usuario</button>

        <a href="restaurante/lista.php">
</form>
    </body>
</html>