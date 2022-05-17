<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="CSS/registro.css">
  </head>
  <body>
    <div class="registro-box">
    <a href="index.php"><img src="assets/logo.jpg" class="avatar" alt="Avatar Image"></img></a>
      <h1>Registro de usuario</h1>
      <form action="index.php" method="get">
        <label for="Nombre">Nombre</label>
        <input type="text" placeholder="Introduce tu Nombre" name="nombre">
        <label for="Apellidos">Apellidos</label>
        <input type="text" placeholder="Introduce tus Apellidos" name="apellidos">
        <label for="DNI">DNI</label>
        <input type="text" placeholder="Introduce tu DNI" name="DNI">
        <label for="Correo electrónico">Correo electrónico</label> <br>
        <input type="email" placeholder="Introduce tu Correo" name="correo">
        <label for="username">Usuario</label>
        <input type="text" placeholder="Introduce tu Usuario" name="usuario">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Introduce tu Contraseña" name="password">
        <input type="submit" value="Comenzar">
        <a href="loginusuario.php">Ya tengo cuenta</a>
      </form>
    </div>
  </body>
</html>