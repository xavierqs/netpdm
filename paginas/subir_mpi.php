<?php
   
   $conn= mysqli_connect("localhost", "root", "", "netpdm");

   if(isset($_POST["import"])){
    $filename = $_FILES["file"]["tmp_name"];
    //arreglos
    
    
    if($_FILES["file"]["size"] > 0){
        $file = fopen($filename, "r");
        while(($column = fgetcsv($file, 10000, ",")) !== FALSE){
            $column=array(
                $id_eje=$column[0],
                $eje = $column[1],
                $cod_sector = $column[2],
                $sector = $column[3],
                $cod_programa = $column[4],
                $programa = $column[5],
                $a_2020 = $column[6],
                $a_2021 = $column[7],
                $a_2022 = $column[8],
                $a_2023 = $column[9],
                $total = $column[10],
                $cod_meta = $column[11],
                $linea_base = $column[12],
                $meta_resultado = $column[13],
                $indi_resultado = $column[14],
                $meta_cuatrienio = $column[15],
                $num_meta = $column[16],
                $meta_producto = $column[17],
                $indi_producto = $column[18],
                $compromiso = $column[19],
                $cumplimiento = $column[20],
                $valor_meta = $column[21],
                $logrado = $column[22],
                $avance = $column[23],
                $avance_r = $column[24],
                $avance_a = $column[25],
                $avance_v = $column[26]
            );
            // 
            // 

            $sqlInsert = ("INSERT INTO mpi(id_eje, eje, cod_sector, sector, cod_programa, programa, a_2020, a_2021, a_2022, a_2023, total, cod_meta, linea_base, meta_resultado, indi_resultado, meta_cuatrienio, num_meta, meta_producto, indi_producto, compromiso, cumplimiento, valor_meta, logrado, avance, avance_r, avance_a, avance_v) VALUES ('$id_eje', '$eje', '$cod_sector', '$sector', '$cod_programa', '$programa', '$a_2020', '$a_2021', '$a_2022', '$a_2023', '$total', '$cod_meta', '$linea_base', '$meta_resultado', '$indi_resultado', '$meta_cuatrienio', '$num_meta', '$meta_producto', '$indi_producto', '$compromiso', '$cumplimiento', '$valor_meta', '$logrado', '$avance', '$avance_r', '$avance_a', '$avance_v')");

            $result = mysqli_query($conn, $sqlInsert);

            if(!empty($result)){
                echo "CSV IMPORTADO EXITOSAMENTE";
            }else{
                echo "PROBLEMA AL IMPORTAR CSV";
            }
        }
    }
 }

 header("Location: mpi_import.php");



 ?>
