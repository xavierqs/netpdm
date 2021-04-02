<?php include 'Cabezas.php'?>
<main>
<?php
//Directorio
$upload="upload";
$dir = $upload;
$directorio = opendir($dir);

$archivos = array();
$carpetas = array();

//Carpetas y Archivos a excluir
$excluir = array('.', '..', '.php', '.ico','.png');

while ($f = readdir($directorio)) {
    if (is_dir("$dir/$f") && !in_array($f, $excluir)) {
        $carpetas[] = $f;
    } else if (!in_array($f, $excluir)){
        //No es una carpeta, por ende lo mandamos a archivos
        $archivos[] = $f;
    }
}
closedir($directorio);

sort($carpetas,SORT_NATURAL | SORT_FLAG_CASE);
sort($archivos,SORT_NATURAL | SORT_FLAG_CASE);
?>

<div class="card-body">
<div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">SUBIR FORMATO DILIGENCIADO</h6>
                                <div class="card-body">
                                <!--INICIO CODIGO-->
                                <div class="table-responsive">
                                <form action="sube_formato.php" method="POST" enctype="multipart/form-data">
                                    Ubicación <input name="archivo" id="archivo" type="file"/>
                                    <input type="submit" name="subir" value="Subir archivo"/>
                                </form>
                                <hr>
                                <div class="card-body">
                                <div class="card shadow-sm border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">FORMATO MPI</h6>
                               <!--<a href="general.php" class="btn btn-primary btn-sm" target="_blank">Generar Informe PDF</a>-->
                               <div class="card-body">
                                <form action="validar.php" method="POST" enctype="multipart/form-data">
                                    <!--OPTION SELECT -->
                                    <input name="secretaria" class="form-control" list="secretaria" id="exampleDataList" value="" placeholder="Selecciona una secretaría">
                                            <datalist id="secretaria">
                                                <option value="Salud">
                                                <option value="Educacion">
                                                <option value="Gobierno">
                                                <option value="Infraestructura">
                                            </datalist>
                                            <br>
                                    <input type="submit" class="btn btn-info" name="descargar" value="Descargar formato"/>
                                    <hr>
                                </form>
                                <h8 class="card-header-sm bg-ligth text-black">Formatos Recibidos</h8>
                                    <div class="card shadow-sm border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <!--<a href="general.php" class="btn btn-primary btn-sm" target="_blank">Generar Informe PDF</a>-->
                               <div class="card-body">
                                 
                                    <?php
                                    //Mostrar Archivos
                                    $i = 1;
                                    $c=0;
                                    foreach ($archivos as $a) {
                                        $c++;
                                        echo '<p class="archivo">' . $c . '. <a "' . $a . '">' . $a . '</a></p>';
                                       
                                    }
                                    ?>
                            </div>
                    </div>
                    <br>
                    
                                
                                        
</div>
</main>

<?php include 'pies.php'?>
