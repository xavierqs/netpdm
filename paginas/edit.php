<?php
   include ("conexion.php");
    
   if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM usuario WHERE id = $id";
    $result = mysqli_query($mysqli, $query);
    
    if (mysqli_num_rows($result) == 1) {      
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $usuario = $row['usuario'];
        $password = $row['password'];
        $nombre = $row['nombre'];
        $tipo_usuario = $row['tipo_usuario'];   
    }    
   }
if (isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $tipo_usuario = $_POST['tipo_usuario'];

    $query = "UPDATE usuario SET usuario = '$usuario', password = '$password', nombre = '$nombre', tipo_usuario = '$tipo_usuario' WHERE id = '$id'";
    mysqli_query($mysqli, $query);
    
    header("Location: edicion.php");
    
    }
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
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="principal.php"><i class="fas fa-globe"></i> Net PDM</a></nav>
            <main>
            <br>
            <br>
<div class="card-body">
                <!--INICIO CODIGO-->
                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                    <h6 class="card-header bg-info text-white">REGISTRO DE USUARIOS</h6>
                    <div class="card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                                                    <div class="form-group">
                                                        <label class="small mb-2">ID</label>
                                                        <input type="text" name="id" value="<?php echo $id;?>" class="form-control">
                                                        <label class="small mb-2">USUARIO</label>
                                                        <input type="text" name="usuario" value="<?php echo $usuario;?>" class="form-control">
                                                        <label class="small mb-2">CONTRASEÑA</label>
                                                        <input type="text" name="password" value="<?php echo $password;?>" class="form-control">
                                                        <label class="small mb-2">ROL</label>
                                                        <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control">
                                                        <label class="small mb-2">TIPO</label>
                                                        <input type="text" name="tipo_usuario" value="<?php echo $tipo_usuario;?>" class="form-control">
                                                        <br>                                            
                                                        <button class="btn btn-info" name="actualizar">ACTUALIZAR DATOS
                                                        </button>
                                                    </div>
                                                </form>
                     </div>    
                </div>
                <!--FIN CODIGO-->
</div>
</main>
<?php include 'pies.php'?>