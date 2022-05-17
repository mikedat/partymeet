<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login de usuario</title>
    <link rel="stylesheet" href="CSS/login.css">
  </head>
  <body>
    <div class="login-box">
    <a href="index.php"><img src="assets/logo.jpg" class="avatar" alt="Avatar Image"></img></a>
      <h1>Inicio de sesión</h1>
      <form action="index.php" method="get">
        <label for="username">Usuario</label>
        <input type="text" placeholder="Introduce tu usuario" name="usuariologin">
        <label for="password">contraseña</label>
        <input type="password" placeholder="Introduce tu contraseña" name="passwordlogin">
        <input type="submit" value="Iniciar sesión">
        <a href="registro.php">¿No tienes cuenta?</a><br>
        <a href="#">¿Olvidaste tu contraseña?</a>
      </form>
    </div>
  </body>
</html>
