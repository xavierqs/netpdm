<?php include 'Cabezas.php'?>
<main>
    <div class="card-body">
        <div class="card shadow-sm">
                    <h6 class="card-header bg-info text-white">SUBIR METAS</h6>
                            <div class="card-body">
                                        <form action="subir_mpi.php" method="POST" name="uploadCsv" enctype="multipart/form-data">
                                        <td class="letra" width="250"><strong>Subir archivo CSV:</strong></td>  
                                        <td><input type="file" name="file" accept=".csv">
                                        <tr>
                                            <button class="btn btn-info" type="submit" name="import">SUBIR</button>
                                        </tr>  
                                        </form>
                                        <div class="card-body">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="mpi" width="100%" cellspacing="0">
                                    <thead class="table-primary"> 
                                            <tr style="text-align:center;">
                                                <!--<th>ID SECTOR</th>-->
                                                
                                                <th>SECTOR</th>
                                                <th>COD_PRO</th>
                                                <th>PROGRAMA</th>
                                                <th>LINEA_BASE</th>
                                                <th>META_RESULTADO</th>
                                                <th>META_CUATRIENIO</th>
                                                <th>META_PRODUCTO</th>
                                                <th>COMPROMISO</th>
                                                <th>CUMPLIMIENTO</th>
                                                <th>AVANCE</th>
                                                
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include 'conexion.php';
                                            $query = "SELECT * FROM mpi";
                                            $result_mpi = mysqli_query($mysqli, $query);
                                            while($row = mysqli_fetch_array($result_mpi)){?>
                                                <tr style="text-align:center;">
                                                   
                                                    <td><?php echo $row['sector']?></td>
                                                    <td><?php echo $row['cod_programa']?></td>
                                                    <td><?php echo $row['programa']?></td>
                                                    <td><?php echo $row['linea_base']?></td>
                                                    <td><?php echo $row['meta_resultado']?></td>
                                                    <td><?php echo $row['meta_cuatrienio']?></td>
                                                    <td><?php echo $row['meta_producto']?></td>
                                                    <td><?php echo $row['compromiso']?></td>
                                                    <td><?php echo $row['cumplimiento']?></td>
                                                    <td><?php echo $row['avance']?></td>
                                                    
                                                </tr>
                                            
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
        </div>
                
                            </div>    
        </div>
    </div>
                
</main>

<?php include 'pies.php'?>