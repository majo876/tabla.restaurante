<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>   
    <div class="login-container">
        <h1>¡BIENVENIDOS!</h1>
        <h1>Iniciar Sesion</h1>
        <form action="login.php" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
            <button type="submit">Iniciar Sesion</button>
            <p> ¿No tienes una cuenta?</p>
            <a href="registro.php">Registrate aqui</a>
        </form>
    </div>
</body>
</html>