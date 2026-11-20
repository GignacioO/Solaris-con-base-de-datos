<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solaris | Inicio</title>

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
 <header>
            <div class="row g-0 align-items-center">
                <div class="col-8 text-center">
                    <img src="imagenes/logo-solaris.svg" alt="Solaris" width="200" height="60">
                </div>

               
                <div class="col-4 sesion">
                    <a href="#">
                        <img src="imagenes/nav-usuario.svg" alt="Usuario" width="50" height="50">
                        <span>Inicia sesión o registrate</span>
                    </a>
                </div>

            </div>
</header>
<main>
        <div class="row g-0">
           <!-- Main izquierda -->
            <nav class="col-3 menu">
                <a href="#" class="nav-menu">
                    <img src="imagenes/nav-inicio.svg" alt="Inicio" width="70" height="50">
                    <span class="subrayado">Inicio</span>
                </a>
                <a href="#" class="nav-menu">
                    <img src="imagenes/nav-productos.svg" alt="Productos" width="70" height="50">
                    <span>Productos</span>
                </a>
                <a href="#" class="nav-menu">
                    <img src="imagenes/nav-sertec.svg" alt="Servicio técnico" width="70" height="50">
                    <span>Servicio técnico</span>
                </a>
                <a href="contacto.php" class="nav-menu">
                    <img src="imagenes/nav-contacto.svg" alt="Contacto" width="70" height="50">
                    <span>Contacto</span>
                </a>
            </nav>
            <!-- Main principal - derecha -->
            <main class="col-9 principal">
                <h1>Más que un reloj,<br><strong>es tu bienestar</strong></h1>
                <!-- El &nbsp; lo aprendí en la materia anterior con Jony, lo habia buscado en internet. sirve para dejar un espacio entre palabras-->
                <p class="categorias">TECNOLOGÍA &nbsp;/&nbsp; SALUD &nbsp;/&nbsp; BIENESTAR</p>
                <div class="row g-0 botones">
                <div class="col-6">
                   <select name="filtros" id="filtros" class="btn-filtro">
                        <option value="" selected disabled>VER FILTROS</option>
                        <option value="depor">Deportivos</option>
                        <option value="econ">Econónicos</option>
                        <option value="ecol">Ecológicos</option>
                    </select>
                </div>
                    <div class="col-6">
                    <select name="ordenar" id="ordenar" class="btn-ordenar">
                    <option value="" selected disabled>ORDENAR POR</option>
                    <option value="precio">Precio</option>
                    <option value="nombre">Nombre</option>
                    </select>
                    </div>
                </div>
                <!-- Relojes principales -->
                <div class="row g-0 productos">

                    <div class="col-6">
                        <div class="tarjeta">
                            
                            <img class="corazon" src="imagenes/icono-corazon.svg" alt="favorito" width="22" height="22">
                     <!-- Reloj principal izq -->
                            <img src="imagenes/reloj1.svg" alt="Reloj Solaris principal width="120" height="140">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="tarjeta">
                            <img class="corazon" src="imagenes/icono-corazon.svg" alt="Favorito" width="22" height="22">
                       <!-- Reloj principal 2 der -->
                            <img src="imagenes/reloj2.svg" alt="Reloj Solaris principal 2" width="120" height="140">
                        </div>
                    </div>

                </div>

                <!-- Características de Solaris -->
                <div class="row g-0 caracteristicas">
                   
                    <div class="col-3">
                        <img src="imagenes/icono-monitorea-salud.svg" alt="Monitoreo de salud" width="50" height="45">
                        <p>Monitoreá<br>tu salud</p>
                    </div>

                    <div class="col-3">
                        <img src="imagenes/icono-segui-progreso.svg" alt="Seguí tu progreso" width="50" height="45">
                        <p>Seguí<br>tu progreso</p>
                    </div>

                    <div class="col-3">
                        <img src="imagenes/icono-cuida.svg" alt="Cuidá el medio ambiente" width="50" height="45">
                        <p>Cuidá el<br>medio ambiente</p>
                    </div>

                    <div class="col-3">
                        <img src="imagenes/icono-bateria.svg" alt="Batería de larga duración" width="50" height="45">
                        <p>Batería de<br>larga duración</p>
                    </div>

                </div>
            </main>
        </div>
</main>
<footer class="pie">
            <div class="row g-0 align-items-center">

                <div class="col-5 contacto">
                    <a href="contacto.php">
                        
                        <img src="imagenes/icono-instagram.svg" alt="Instagram" width="40" height="40">
                        <span>/Solaris.dev</span>
                    </a>
                </div>

                <div class="col-5 contacto">
                    <a href="contacto.php" target="_blank">
                        
                        <img src="imagenes/icono-whatsapp.svg" alt="WhatsApp" width="40" height="40">
                        <span>1125690479</span>
                    </a>
                </div>

            </div>
                <a href="contacto.php" target="_blank" class="wppflota">
            <img src="imagenes/icono-flotante-whatsapp.svg" alt="Escribinos por WhatsApp" width="52" height="52">
        </a>

</footer>
</body>
</html>

