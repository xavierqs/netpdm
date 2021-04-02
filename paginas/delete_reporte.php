<?php
    include("conexion.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM reporte1 WHERE id = $id";
        $result = mysqli_query($mysqli, $query); 
        if (!$result){
            die("Consulta fallida");
        }
        
       header("Location: reporte.php");

    }
?>