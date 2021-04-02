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