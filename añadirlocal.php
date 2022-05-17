<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Únete a nosotros</title>
    <link rel="stylesheet" href="CSS/añadirlocal.css">
  </head>
  <body>
    <div class="local-box">
    <a href="index.php"><img src="assets/logo.jpg" class="avatar" alt="Avatar Image"></img></a>
      <h1>Añadir local</h1>
      <form action="index.php" method="get">
        <label for="Nombre">Nombre de tu local</label>
        <input type="text" placeholder="Introduce el Nombre de tu local" name="nombre">
        <label for="Dirección">Dirección del local</label>
        <input type="text" placeholder="Dirección del local" name="calle">
        <label for="username">Usuario</label>
        <input type="text" placeholder="Introduce tu Usuario" name="usuario">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Introduce tu Contraseña" name="password">
        <input type="submit" value="Comenzar">
      </form>
    </div>
  </body>
</html>