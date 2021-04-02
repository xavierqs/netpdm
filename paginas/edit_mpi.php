<?php
   include ("conexion.php");
    
   if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM mpi WHERE id = $id";
    $result = mysqli_query($mysqli, $query);
    
    if (mysqli_num_rows($result) == 1) {      
        $row = mysqli_fetch_array($result);
        $id= $row['id'];
        $id_sector = $row['id_sector'];
        $programa = $row['programa'];
        $meta_resultado = $row['meta_resultado'];
        $meta_cuatrenio = $row['meta_cuatrenio'];
        $meta_producto = $row['meta_producto'];
        $compromiso = $row['compromiso'];
        $cumplimiento = $row['cumplimiento'];  
        $avance = $row['avance'];  
    }    
   }
if (isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $id_sector = $_POST['id_sector'];
    $programa = $_POST['programa'];
    $meta_resultado = $_POST['meta_resultado'];
    $meta_cuatrenio = $_POST['meta_cuatrenio'];
    $meta_producto = $_POST['meta_producto'];
    $compromiso = $_POST['compromiso'];
    $cumplimiento = ['cumplimiento'];
    $avance = $row['avance'];  
    
    $query = "UPDATE mpi SET id_Sector = '$id_sector', programa = '$programa', meta_resultado = '$meta_resultado', meta_cuatrenio = '$meta_cuatrienio', meta_producto = '$meta_producto', compromiso = '$compromiso', cumplimiento = '$cumplimiento', avance = '$avance' WHERE id = '$id'";
    mysqli_query($mysqli, $query);
    
    header("Location: edita_mpi.php");
    
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
                    <h6 class="card-header bg-info text-white">MODIFICAR REGISTROS DEL PLAN INDICATIVO</h6>
                    <div class="card-body">
                    <form action="edit_mpi.php?id=<?php echo $_GET['id']; ?>" method="POST">
                                                    <div class="form-group">
                                                       
                                                        <label class="small mb-2">PROGRAMA</label>
                                                        <input type="text" name="programa" value="<?php echo $programa;?>" class="form-control">
                                                        <label class="small mb-2">META RESULTADO</label>
                                                        <input type="text" name="meta_resultado" value="<?php echo $meta_resultado;?>" class="form-control">
                                                        <label class="small mb-2">META CUATRENIO</label>
                                                        <input type="text" name="meta_cuatrenio" value="<?php echo $meta_cuatrenio;?>" class="form-control">
                                                        <label class="small mb-2">META PRODUCTO</label>
                                                        <input type="text" name="meta_producto" value="<?php echo $meta_producto;?>" class="form-control">
                                                        <label class="small mb-2">COMPROMISO</label>
                                                        <input type="text" name="compromiso" value="<?php echo $compromiso;?>" class="form-control">
                                                        <label class="small mb-2">CUMPLIMIENTO</label>
                                                        <input type="text" name="cumpli_2020" value="<?php echo $cumpli_2020;?>" class="form-control">
                                                        <label class="small mb-2">AVANCE</label>
                                                        <input type="text" name="avance" value="<?php echo $avance;?>" class="form-control" disabled>
                                                        <br>                                            
                                                        <button class="btn btn-info" name="actualizar">ACTUALIZAR DATOS</button>
                                                    </div>
                                                </form>
                     </div>    
                </div>
                <!--FIN CODIGO-->
</div>
</main>
        
<?php include 'pies.php'?>