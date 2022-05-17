<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParyMeet</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
    
        <nav class="nav">
        <a href="index.php"><img src="assets/logo.jpg" class="avatar" alt="Avatar Image"></img></a>
        <ul class="list">

            <li class="list__item">
                <div class="list__button">
                <img src="assets/agregar.svg" class="list__img">
                    <a href="registro.php" class="nav__link">Registro de usuario</a>
                </div>
            </li>
            <li class="list__item">
                <div class="list__button">
                    <img src="assets/dashboard.svg" class="list__img">
                    <a href="loginusuario.php" class="nav__link">Inicio sesión</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="assets/docs.svg" class="list__img">
                    <a href="#" class="nav__link">Servicios</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="reservas.php" class="nav__link nav__link--inside">Reservas</a>
                    </li>

                    <li class="list__inside">
                        <a href="añadirlocal.php" class="nav__link nav__link--inside">Añadir mi local</a>
                    </li>
                </ul>

            </li>
            </li>
            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="assets/message.svg" class="list__img">
                    <a href="#" class="nav__link">Contacto</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>
                <ul class="list__show">
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Teléfono de contacto: +34687705525</a>
                    </li>
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Correo: meet1pary@gmail.com</a>
                    </li>
                    <li class="list__inside">
                        <a href="https://www.twitter.com/part_meet" class="nav__link nav__link--inside">Nuestro perfil de Twitter</a>
                    </li>
                    <li class="list__inside">
                        <a href="https://www.instagram.com/parymeet?igshid=YmMyMTA2M2Y" class="nav__link nav__link--inside">Nuestro perfil de Instagram</a>
                    </li>
                    <li class="list__inside">
                        <a href="https://www.youtube.com/channel/UC4cy-cfYAkmFCQB7AoG20Bg" class="nav__link nav__link--inside">Nuestro canal de Youtube</a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>    
   <script src="JS/main.js"></script>
</body>
</html>