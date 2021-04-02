<?php
   
   $conn= mysqli_connect("localhost", "root", "", "netpdm");

   if(isset($_POST["import"])){
    $filename = $_FILES["file"]["tmp_name"];
    //arreglos
    
    
    if($_FILES["file"]["size"] > 0){
        $file = fopen($filename, "r");
        while(($column = fgetcsv($file, 10000, ",")) !== FALSE){
            $column=array(
                
                $ejes = $column[0],
                $avance = $column[1],
                $avance_r = $column[2],
                $avance_a = $column[3],
                $avance_v = $column[4],
                $eje_2=$column[5]                

            );
            // 
            // 

            $sqlInsert = ("INSERT INTO ejes(ejes, avance, avance_r, avance_a, avance_v, eje_2) VALUES ('$ejes', '$avance', '$avance_r', '$avance_a', '$avance_v', '$eje_2')");

            $result = mysqli_query($conn, $sqlInsert);

            if(!empty($result)){
                echo "CSV IMPORTADO EXITOSAMENTE";
            }else{
                echo "PROBLEMA AL IMPORTAR CSV";
            }
        }
    }
 }

 header("Location: ejes_import.php");



 ?>
