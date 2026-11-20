<?php
include("base.php");


$exito = false;
$error = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $consulta = "INSERT INTO consultas (nombre, apellido, email, mensaje) VALUES ('$nombre', '$apellido', '$email', '$mensaje')";

   
    if (mysqli_query($conexion, $consulta)) {
        $exito = true;
    } else {
        $error = true;
    }
}

$resultado = mysqli_query($conexion, "SELECT * FROM consultas ORDER BY id DESC");


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Solaris</title>
    <!-- Bootstrap -->
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

    <div class="row g-0">
        <!-- Menú izquierda -->
        <nav class="col-3 menu">
            <a href="index.html" class="nav-menu">
                <img src="imagenes/nav-inicio-c.svg" alt="Inicio" width="70" height="50">
                <span>Inicio</span>
            </a>
            <a href="#" class="nav-menu">
                <img src="imagenes/nav-productos.svg" alt="Productos" width="70" height="50">
                <span>Productos</span>
            </a>
            <a href="#" class="nav-menu">
                <img src="imagenes/nav-sertec.svg" alt="Servicio técnico" width="70" height="50">
                <span>Servicio técnico</span>
            </a>
            <a href="#" class="nav-menu">
                <img src="imagenes/nav-contacto-c.svg" alt="Contacto" width="70" height="50">
                <span class="subrayado">Contacto</span>
            </a>
        </nav>

        <!-- Contenido principal derecha -->
        <main class="col-9 principal">
            <h1>Más que un reloj,<br><strong>es tu bienestar</strong></h1>
            <p class="categorias">TECNOLOGÍA &nbsp;/&nbsp; SALUD &nbsp;/&nbsp; BIENESTAR</p>
            
            <h2 class="h2d">Dejá tu consulta:</h2>
            
            <!-- Bootstrap bien usado es una locura las cosas que podes hacer -->
            <?php if ($exito):
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    ¡Tu mensaje fue enviado correctamente! El equipo de Solaris te responderá pronto.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php elseif ($error): 
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Hubo un error al enviar tu consulta. Por favor, intenta nuevamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php endif; 
            ?>

            
            <form class="contact-form" action="" method="POST">
                <input type="text" name="nombre" class="texto-contacto" placeholder="Nombre" required value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
                <br>
                
                <input type="text" name="apellido" class="texto-contacto" placeholder="Apellido" required value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>">
                <br>
                
                <input type="email" name="email" class="texto-contacto" placeholder="Correo electrónico" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                <br>
                <br>
                
                <textarea name="mensaje" class="texto-contacto" placeholder="Dejá tu mensaje acá" rows="6" required><?php echo isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : ''; ?></textarea>
                <br>
                
                <button type="submit" class="btn-enviar">Enviar</button>
            </form>




        </main>
    </div>

    
    <footer class="pie">
        <div class="row g-0 align-items-center">
            <div class="col-5 contacto">
                <a href="#">
                    <img src="imagenes/icono-instagram.svg" alt="Instagram" width="40" height="40">
                    <span>/Solaris.dev</span>
                </a>
            </div>
            <div class="col-5 contacto">
                <a href="#" target="_blank">
                    <img src="imagenes/icono-whatsapp.svg" alt="WhatsApp" width="40" height="40">
                    <span>1125690479</span>
                </a>
            </div>
        </div>
        <a href="#" target="_blank" class="wppflota">
            <img src="imagenes/icono-flotante-whatsapp.svg" alt="Escribinos por WhatsApp" width="52" height="52">
        </a>
    </footer>

    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <h2>Consultas recibidas</h2>

<?php if (mysqli_num_rows($resultado) > 0): ?>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                </tr>
            </thead>

            <tbody>

                <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>

                    <tr>
                        <td><?php echo $fila['id']; ?></td>

                        <td><?php echo htmlspecialchars($fila['nombre']); ?></td>

                        <td><?php echo htmlspecialchars($fila['apellido']); ?></td>

                        <td><?php echo htmlspecialchars($fila['email']); ?></td>

                        <td><?php echo htmlspecialchars($fila['mensaje']); ?></td>
                    </tr>

                <?php endwhile; ?>

            </tbody>
        </table>
    </div>

<?php else: ?>

    <p>Todavía no hay consultas recibidas.</p>

<?php endif; ?>
</body>
</html>