<?php 

include("conexion.php");
$mensaje="";
if (isset($_POST['Grabar'])){
        $info=0;
        $usuario= $_POST['usuario'];
        $password= $_POST['password'];
        $nombre1= $_POST['tipo_usuario'];
        $nombre = substr("$nombre1", 3, );
        $tipo_usuario= $_POST['tipo_usuario'];
        if ($usuario == ""):
            $mensaje="¡Registro no almacenado, escriba el nombre del usuario!";
            $info="alert alert-danger";
        elseif ($password == ""):
            $mensaje="¡Registro no almacenado, digite el password!";
            $info="alert alert-danger";   
        elseif ($nombre == ""):
            $mensaje="¡Registro no almacenado, elija entre administrador u operador!";
            $info="alert alert-danger";
        else: 
                
        $query = "INSERT INTO usuario(usuario, password, nombre, tipo_usuario) VALUES ('$usuario', '$password', '$nombre', '$tipo_usuario')";
        $result = mysqli_query($mysqli, $query);
        $_SESSION['message'] = '';
        if (!$result){
            die("Query failed");
            
        } else{
        $_SESSION['message'] = '¡Usuario guardado exitosamente!';
        $mensaje="¡Registro almacenado exitosamente!"; 
        $info="alert alert-success";
             
        }
        //header("Location: registro.php");
        
        endif;
}
//$passwordx=sha1($password);
?>
<div class="text-center">
<br>
<div class="form-group"><h6 class="<?php echo $info;?>">
    <label class=""><?php echo $mensaje;?></label>
</div>
</div>
