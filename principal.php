<?php
    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }

    $nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FOCUS</title>
        <link href="imagenes/Logo.png" rel="icon" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #003682;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="color:withe" href="principal.php">FOCUS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color: white"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="usuario_configuracion.php">Configuración de perfil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav" style="color: white">
                <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color: #003682;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu" style="color: white">
                        <div class="nav" style="color: white">
                            <div class="sb-sidenav-menu-heading" style="color: white">Menú de Opciones</div>
                            <a class="nav-link" href="Actividades.php" style="color: white">
                                <div class="sb-nav-link-icon"><i class="fas fa-pencil" style="color: white"></i></div>
                                Actividades
                            </a>
                            <a class="nav-link collapsed" href="Contactos.php" style="color: white">
                                <div class="sb-nav-link-icon"><i class="fas fa-user" style="color: white"></i></div>
                                Contactos
                            </a>
                            <a class="nav-link collapsed" href="Horario.php" style="color: white">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar" style="color: white"></i></div>
                                Calendario
                            </a>
                            <a class="nav-link collapsed" href="Materias.php" style="color: white">
                                <div class="sb-nav-link-icon"><i class="fas fa-book" style="color: white"></i></div>
                                Materias
                            </a>
                            <!--<a class="nav-link collapsed" href="Notificaciones.php" style="color: white">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope" style="color: white"></i></div>
                                Notificaciones
                            </a>-->
                    </nav>
            </div> 
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">FOCUS</h1>
                        <hr/>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                        <p align="center"><img src=imagenes/imagen-inicio.jpeg width="650px" height="350px"></p> 
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-end justify-content-between small">
                            <div class="text-muted">Copyright &copy; FOCUS</div>
                            <p align="right"><img src=imagenes/Logo.png width="68px" height="63px"></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
