<?php
    include("conexion.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuario WHERE id = $id";
        $result = mysqli_query($mysqli, $query); 
        if (!$result){
            die("Consulta fallida");
        }
        
       header("Location: edicion.php");

    }
?>