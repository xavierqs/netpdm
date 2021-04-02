<?php
    include 'conexion.php';
    session_start();

    if (!isset($_SESSION['id'])){
        header("Location: index.php");
        
    }
    
    $nombre = $_SESSION['nombre'];
    $usuario = $_SESSION['usuario'];
    $tipo_usuario = $_SESSION['tipo_usuario'];
  
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Net PDM</title>
        <link href="css/styles.css" rel="stylesheet" />
        <!-- BOOTSTRAP DATA TABLES-->
        <!-- AWESOME-->
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="js/sweet_alert.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href=""><i class="fas fa-globe"></i> Net PDM</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                   <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre;?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <a class="dropdown-item" href="#">Actividad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!--PRESENTACIÓN-->
                            <a class="nav-link collapsed" href="principal.php" data-target="#presentación" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="far fa-address-book"></i></div>
                                Presentación
                            </a>
                            
                            <!--DOCUMENTOS-->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#opcion1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Documentos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="opcion1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="componente.php">Componente General</a>
                                    <a class="nav-link" href="parte_1.php">Parte 1 Estrategica</a>
                                    <a class="nav-link" href="parte_2.php">Parte 2 Operativa</a>
                                    <a class="nav-link" href="formato_excel.php">Formatos MPI</a>
                                    
                                </nav>
                            </div>
                            <!--ESTADISTICAS-->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#opcion3" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="far fa-chart-bar"></i></div>
                                Estadísticas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="opcion3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="bar1.php">Ejes</a>
                                    <a class="nav-link" href="bar2.php">Sectores</a>
                                    <a class="nav-link" href="bar3.php">Programas</a>
                                    <a class="nav-link" href="mpi.php">Metas</a>
                                </nav>
                            </div>
                            <!--INFORMES-->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#opcion4" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-glasses"></i></div>
                                Informes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="opcion4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="imprime/ejes.php">Ejes</a>
                                    <a class="nav-link" href="imprime/sectores.php">Sectores</a>
                                    <a class="nav-link" href="imprime/programas.php">Programas</a>
                                    <a class="nav-link" href="imprime/metas.php">Metas</a>
                                    <a class="nav-link" href="general.php" target="_blank">General</a>
                                </nav>
                            </div>
                            <!-- Permisos de administrador -->
                            <?php if($tipo_usuario == 1) {?>
                            <!--ADMINISTRACIÓN-->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#administración" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                Datos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="administración" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ejes_import.php">Ejes</a>
                                    <a class="nav-link" href="sectores_import.php">Sectores</a>
                                    <a class="nav-link" href="programas_import.php">Programas</a>
                                    <a class="nav-link" href="mpi_import.php">Metas</a>
                                    <a class="nav-link" href="reporte_general.php">General</a>
                                </nav>
                            </div>
                            <!--USUARIOS-->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usuarios" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="usuarios" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registro.php">Registro</a>
                                    <a class="nav-link" href="usuarios.php">Usuarios</a>
                                    <a class="nav-link" href="edicion.php">Edición</a>
                                </nav>
                            </div>
                            <?php }?>
                            
                           
                        </div>
                    </div>
                     <!--CONECTADO COMO-->
                    <div class="sb-sidenav-footer">
                        <div class="small"><b>Usuario:</b> <?php echo $usuario;?></div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">