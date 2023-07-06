<?php

    session_start();
    
    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("por favor debes iniciar sesion");
                window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anuel RHLM</title>
    <script src="https://kit.fontawesome.com/283335a286.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&family=Mulish:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/necolas.github.io_normalize.css_8.0.1_normalize.css">
    <link rel="stylesheet" href="assets/css/estilos principal.css">
    <link rel="icon" href="assets/img/logo.ico">
</head>

<body>
    <header class="encabezado">
        <div class="contenedor-navegacion">
            <div class="contenido-navegacion contenedor">
                <div class="logo">
                    <h2>Anuel <span class="verde">R</span><span>H</span><span class="rojo">LM</span></h2>
                </div>
                <nav class="navegacion contenedor ocultar">
                    <a href="principal.php">Inicio</a>
                    <a href="musica.php">Musica</a>
                    <a href="historia.php">Historia</a>
                    <a href="php/cerrar_sesion.php">cerrar sesion</a>
                </nav>
                <div class="hamburguesa">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
        <div class="contenido-header">
            <div class="contenedor-encabezado">
                <div class="texto-encabezado">
                    <h2>Real <span class="verde">Hasta</span> La <span class="rojo">Muerte</span></h2>
                    <a href="#" class="btn bordes">il a nustro menu</a>
                </div>
                <video autoplay loop muted>
                    <source src="/assets/Fondos para pantalla de Anuel AA.mp4">
                </video>
            </div>
        </div>

    </header>

    <div class="contenedor-nosotros contenedor">
        <div class="texto-nosotros">
            <p>Bienvenidos a!</p>
            <h1>Anuel Real Hasta La Muerte</h1>
            <p>¡Hola! Bienvenido a la página web sobre Anuel, donde podrás conocer todo acerca del famoso cantante de
                trap. Aquí encontrarás información sobre su vida, su música y su carrera, así como también sus últimos
                lanzamientos y colaboraciones con otros artistas. ¡Espero que disfrutes de tu experiencia en nuestra
                página web!</p>
            <a href="#" class="btn btn-rojo">Contactar</a>
        </div>
        <div class="imagenes-nosotros">
            <div class="imagen1">
                <img data-src="assets/img/nosotros1.webp" alt="mujer comiendo pizza">
            </div>
            <div class="imagenes2">
                <img data-src="assets/img/nosotros2.webp" alt="mujeres comiendo pizza">
                <img data-src="assets/img/nosotros3.webp" alt="plato con pasta">
            </div>
        </div>
    </div>

    <section class="menu contenedor">
        <h2 class="texto-Albumes">Albumes populares</h2>
        <div class="Albumes">
            <div class="Albumes" data-Albumes="Album">
                <img data-src="assets/img/nosotros4.webp" alt="">
                <h2>Diablo, Que Chimba</h2>
                <p>Diablo, Que Chimba</p>
                <div class="fecha">
                    <p>2023.Sencillo/EP</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Album">
                <img data-src="assets/img/nosotros5.webp" alt="">
                <h2>LLNM2</h2>
                <br>
                <br>
                <p>BRR</p>
                <div class="fecha">
                    <p>2022.Album</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Album">
                <img data-src="assets/img/nosotros6.webp" alt="">
                <h2>Las Leyendas Nunca Mueren</h2>
                <p>Real Hasta La Muerte</p>
                <div class="fecha">
                    <p>2021.Album</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Sencillo/EP">
                <img data-src="assets/img/nosotros7.webp" alt="">
                <h2>23 Preguntas</h2>
                <p>23 Preguntas</p>
                <div class="fecha">
                    <p>2021.Sencillo/EP</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Sencillo/EP">
                <img data-src="assets/img/nosotros8.webp" alt="">
                <h2>Fiel Remix</h2>
                <p>Fiel</p>
                <div class="fecha">
                    <p>2021.Sencillo/EP</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Sencillo/EP">
                <img data-src="assets/img/nosotros9.webp" alt="">
                <h2>LOCATION</h2>
                <p>LOCATION</p>
                <div class="fecha">
                    <p>2021.Sencillo/EP</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Album">
                <img data-src="assets/img/nosotros10.webp" alt="">
                <h2>Los Dioses</h2>
                <p>Los Dioses</p>
                <div class="fecha">
                    <p>2021.Album</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Album">
                <img data-src="assets/img/nosotros11.webp" alt="">
                <h2>Emmanuel</h2>
                <p>No Llores mujer</p>
                <div class="fecha">
                    <p>2020.Album</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Sencillo/EP">
                <img data-src="assets/img/nosotros12.webp" alt="">
                <h2>China</h2>
                <p>China</p>
                <div class="fecha">
                    <p>2018.Sencillo/EP</p>
                </div>
            </div>
            <div class="Albumes" data-Albumes="Album">
                <img data-src="assets/img/nosotros13.webp" alt="">
                <h2>Real Hasta La Muerte</h2>
                <p>Na'Nuevo</p>
                <div class="fecha">
                    <p>2018.Album</p>
                </div>
            </div>
        </div>
    </section>

    <div class="separador">
        <div class="contenido-separador contenedor">
            <h2>Yo no estoy para mendigar ni amor ni amistad, agradezco a los que se van les deseo buena suerte</h2>
            <a href="https://19frases.com/de-anuel/" class="btn btn-rojo">para mas frases</a>
        </div>
    </div>

    <section class="Anuel">
        <h2>Anuel AA</h2>
        <div class="contenido-Anuel">
            <div class="texto-Anuel">
                <h3>Pero te lo prometo, voy a hacer historia y aunque me odien, van a tenerme en su memoria. - STREET POEM.
                </h3>
                <p>Anuel AA es un cantante puertorriqueño de reggaetón , rap y trap, nacido el 26 de noviembre de 1992 en
                    Santiago , Carolina, Puerto Rico y conocido artísticamente como Anuel AA. Su música a menudo contiene
                    muestras de otros géneros de música latina y estadounidense, y ha colaborado con otros artistas como
                    Karol G, J Balvin y Daddy Yankee. Anuel AA ha tenido un gran éxito en la música urbana latina y ha
                    ganado múltiples premios y reconocimientos durante su carrera. Recientemente, culminó una gira con Karol
                    G y ha lanzado múltiples éxitos en solitario</p>
                    <a href="historia.html" class="btn btn-rojo">Leer Biografia</a>
            </div>
            <div class="imagen-Anuel">
            <img data-src="assets/img/nosotros15.webp" alt="fotografia de Anuel">
          </div>
        </div>
    </section>

    <div class="formulario-contacto contenedor">

        <div class="informacion-contacto">
            <h3>Contactanos</h3>
            <p><i class="fas fa-map-marker-alt"></i>U.N.E.F.A. (Nucleo Guatire)
                Avenida Intercomunal Guarenas - Guatire, Guatire 1221, Miranda, Venezuela</p>
            <p><i class="fas fa-envelope"></i>evecklopez7@gmail.com</p>
            <p><i class="fas fa-phone-alt"></i>+58 412 758 1861</p>
            <div class="redes-sociales">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>

        <form class="formulario">
            <div class="input-formulario">
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Pedro" id="nombre">
            </div>
            <div class="input-formulario">
                <label for="apellidos">Apellido</label>
                <input type="text" placeholder="Pedro" id="apellidos">
            </div>
            <div class="input-formulario">
                <label for="correo">Correo</label>
                <input type="email" placeholder="ejemplo@ejemplo.com" id="correo">
            </div>
            <div class="input-formulario">
                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="+58 543 779 9410" id="telefono">
            </div>
            <div class="input-formulario">
                <label for="mensaje">Mensaje</label>
                <textarea></textarea>
            </div>
            <div class="btn-formulario">
                <input type="submit" class="btn btn-rojo" value="Enviar">
            </div>
            
        </form>
    </div>
    <div class="pie-pagina ">
        <div class="contenedor-piepagina contenedor">
            <div class="info">
                <h3>Dirección</h3>
                <p>U.N.E.F.A. (Nucleo Guatire)
                    Avenida Intercomunal Guarenas - Guatire, Guatire 1221, Miranda, Venezuela</p>
            </div>
            <div class="info">
                <p>+58 412 758 1861</p>
            </div>
            <div class="info">
                <div class="redes-sociales redes-pie">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="info">
                <h3>Noticias</h3>
                <p>suscribete para recibir más noticias</p>
                <input type="email" placeholder="Tu correo">
                <input type="submit" class="btn btn-rojo" value="Suscribirse">
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>Todos los derechos reservados &copy; 2023 Anuel RAHLM, desarrollado por Eveck Lopez</p>
    </footer>
    <script src="assets/js/app.js"></script>
    
</body>

</html>