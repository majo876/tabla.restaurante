<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registro</title>

<link rel="stylesheet" href="css/estilos.css">

</head>

<body>

<div class="login-container">

<h1>Crear Cuenta</h1>

<form action="guardar_login.php" method="POST">

<label>Nombre</label>
<input type="text" name="nombre" required>

<label>Correo electrónico</label>
<input type="email" name="correo" required>

<label>Usuario</label>
<input type="text" name="usuario" required>

<label>Contraseña</label>
<input type="password" name="password" required>

<button type="submit">
Registrarse
</button>

<p>
¿Ya tienes cuenta?
<a href="index.php">Iniciar sesión</a>
</p>

</form>

</div>

</body>

</html>