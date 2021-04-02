<?php 

include("conexion.php");

if (isset($_POST['Grabar'])){
        
        
        $id_sector = $_POST['txtvalue2'];
        $id_programa = $_POST['txtvalue2'];
        $programa = $_POST['txtvalue2'];
        $subprograma = $_POST['subprograma'];
        $año = $_POST['año'];
        $id_eje = $_POST['txtvalue3'];
        $linea_base = $_POST['linea_base'];
        $meta_resultado = $_POST['meta_resultado'];
        $cod_meta = $_POST['cod_meta'];
        $indicador = $_POST['indicador'];
        $meta_cuatrenio = $_POST['meta_cuatrenio'];
        $meta_producto = $_POST['meta_producto'];
        $indicador_producto = $_POST['indicador_producto'];
        $num_mpro = $_POST['num_mpro'];
        $compromiso = $_POST['compromiso'];
        $cumpli_2020 = $_POST['cumpli_2020'];
        $valor_mp = ($meta_cuatrenio/$num_mpro);
        $avance = ($cumpli_2020*100)/$compromiso;
        $logrado_pro = ($valor_mp*$avance)/100;
                
        if ($avance<=30):
            $avance_r=$avance;
            $avance_a=0;
            $avance_v=0;
        elseif ($avance>31 && $avance<=70):
            $avance_r=0;
            $avance_a=$avance;
            $avance_v=0;
        elseif ($avance>71):
            $avance_r=0;
            $avance_a=0;
            $avance_v=$avance;
        else: echo "Registro invalido";
    endif;        
         
        $query = "INSERT INTO mpi(id_sector, id_programa, programa, subprograma, año, id_eje, linea_base, meta_resultado, cod_meta, indicador, meta_cuatrenio, meta_producto, indicador_producto, num_mpro, compromiso, cumpli_2020, valor_mp, logrado_pro, avance, avance_r, avance_a, avance_v) VALUES ('$id_sector', '$id_programa', '$programa', '$subprograma', '$año', '$id_eje', '$linea_base', '$meta_resultado', '$cod_meta', '$indicador', '$meta_cuatrenio', '$meta_producto', '$indicador_producto', '$num_mpro', '$compromiso', '$cumpli_2020', '$valor_mp', '$logrado_pro', '$avance', '$avance_r', '$avance_a', '$avance_v')";
        $result = mysqli_query($mysqli, $query);
        $_SESSION['message'] = '';
        if (!$result){
            die("Query failed");
            
        } else{
        $_SESSION['message'] = '¡Registro guardado exitosamente!';      
        }

        header("Location: registro_mpi.php");
}

?>