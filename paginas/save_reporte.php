<?php 

include("conexion.php");
$mensaje="";
if (isset($_POST['Grabar'])){
        $info=0;
        $descripcion= $_POST['descripcion'];
        $nombre1= $_POST['seccion'];
        $nombre = substr("$nombre1", 3, );
        $seccion= $nombre;
        if ($descripcion == ""):
            $mensaje="¡Registro no almacenado, escriba una descripción!";
            $info="alert alert-danger";
        elseif ($seccion == ""):
            $mensaje="¡Registro no almacenado, elija una sección!";
            $info="alert alert-danger";   
        else: 
                
        $query = "INSERT INTO reporte1(descripcion, seccion) VALUES ('$descripcion', '$seccion')";
        $result = mysqli_query($mysqli, $query);
        $_SESSION['message'] = '';
        if (!$result){
            die("Query failed");
            
        } else{
        $_SESSION['message'] = '¡Informe guardado exitosamente!';
        $mensaje="¡Informe almacenado exitosamente!"; 
        $info="alert alert-success";
        }
        //header("Location: registro.php");
        endif;
}
//$passwordx=sha1($password);
?>
<hr>
<div class="text-center">
<div class="form-group"><h6 class="<?php echo $info;?>">
    <label class=""><?php echo $mensaje;?></label>
</div>
</div>
