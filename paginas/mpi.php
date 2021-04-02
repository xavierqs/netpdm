<?php include 'Cabezas.php'?>
<main>

                <div class="card-body">
                                <!--INICIO CODIGO-->
                                
                                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">AVANCE DE LAS METAS DE PRODUCTO</h6>
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
                                                        <th><button class="btn btn-info" data-toggle="modal" data-target="#ventanaModal">Gráfica</button></th>
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
 
                                                            <!--<td class="table-secondary"><h6><p class="font-weight-bold text-center">//<?php echo $row['cumpli_meta']?>//</p></h6></td>-->
                                                            <td>
                                                            <div class="progress" style="height:30px">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $row['avance_r']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><?php echo $row['avance_r']?>%</div>
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $row['avance_a']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><?php echo $row['avance_a']?>%</div>
                                                            <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo $row['avance_v']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><?php echo $row['avance_v']?>%</div>
                                                            </div>
                                                                                                                
                                                        </tr>
                                                    
                                                    <?php }?>
                                            </tbody>
                                        </table>
                                </div>
                </div>
</main>
        <!-----VENTANA MODAL--->
<div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
                
            <h5 class="card-header bg-info text-white">AVANCE DE LAS METAS DE RESULTADO<button class="close" data-dismiss="modal" aria-label="cerrar">
                      <span aria-hidden="true">&times;</span>
            </button></h5>
                    
            <div class="card-body">
                                <!--INICIO CODIGO DE LA TABLA DENTRO DE LA VENTANA MODAL-->
                                <div class="card shadow-xl border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                     <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="mpi2" width="100%" cellspacing="0">
                                                <thead class="table-primary">   
                                                    <tr style="text-align:center;">
                                                    <th>COD_META</th>
                                                    <th>META_RESULTADO</th>
                                                    <th>ESTADO_DE_AVANCE_DE_LA_META_DE_RESULTADO</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $query = "SELECT * FROM mpi";
                                                    $result_mpi = mysqli_query($mysqli, $query);
                                                    while($row = mysqli_fetch_array($result_mpi)){?>
                                                        <tr style="text-align:center;">
                                                            <td><?php echo $row['cod_meta']?></td>
                                                            <td><?php echo $row['meta_resultado']?></td>
                                                            <td>
                                                            <div class="progress" style="height:30px">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $row['avance_r']?>%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><?php echo $row['avance_r']?>%</div>
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $row['avance_a']?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><?php echo $row['avance_a']?>%</div>
                                                            <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo $row['avance_v']?>%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?php echo $row['avance_v']?>%</div>
                                                            </div>
                                                            </td>                                                      
                                                        </tr>
                                                        <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--FIN CODIGO-->
            </div>
        </div>
    </div>
</div>
   
<?php include 'pies.php'?>
