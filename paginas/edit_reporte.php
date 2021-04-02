<?php
   include ("conexion.php");
    
   if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM reporte1 WHERE id = $id";
    $result = mysqli_query($mysqli, $query);
    
    if (mysqli_num_rows($result) == 1) {      
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $descripcion = $row['descripcion'];
        $seccion = $row['seccion'];
           
    }    
   }
if (isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $descripcion = $_POST['descripcion'];
    $seccion = $_POST['seccion'];
    
    $query = "UPDATE reporte1 SET descripcion = '$descripcion', seccion = '$seccion' WHERE id = '$id'";
    mysqli_query($mysqli, $query);
    
    header("Location: reporte.php");
    
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
                    <h6 class="card-header bg-info text-white">REGISTRO DE REPORTES</h6>
                    <div class="card-body">
                    <form action="edit_reporte.php?id=<?php echo $_GET['id']; ?>" method="POST">
                                                    <div class="form-group">
                                                        
                                                        <label class="small mb-2">DESCRIPCION</label>
                                                        <textarea name="descripcion" class="form-control" rows="10"><?php echo $descripcion;?></textarea>
                                                        <label class="small mb-2">SECCION</label>
                                                        <input type="text" name="seccion" value="<?php echo $seccion;?>" class="form-control">
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