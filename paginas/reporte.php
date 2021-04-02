<?php include 'Cabezas.php'?>
<main>
    <div class="card-body">
    <!--INICIO CODIGO-->
                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">REPORTES ALMACENADOS</h6>
                                    <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="mpi" width="100%" cellspacing="0">
                                    <thead class="table-primary"> 
                                            <tr style="text-align:center;">
                                                    <th>DESCRIPCION</th>
                                                    <th>SECCION</th>
                                                    <th>ACCIÓN</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM reporte1";
                                            $result_reporte1 = mysqli_query($mysqli, $query);
                                            while($row = mysqli_fetch_array($result_reporte1)){?>
                                                <tr style="text-align:center;">
                                                    
                                                    <td width="75%" style="text-align:justify;"><?php echo $row['descripcion']?></td>
                                                    <td><?php echo $row['seccion']?></td>
                                                    <td>
                                                       <a href="edit_reporte.php?id=<?php echo $row['id'] ?>"class="btn btn-info"><i class="fas fa-highlighter"></i></a>
                                                       <a href="delete_reporte.php?id=<?php echo $row['id'] ?>"class="btn btn-info"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                            
                                            <?php }?>
                                    </tbody>
                                </table>
                                <input type="submit" class="btn btn-info btn-sm" value="Regresar" onClick="history.go(-1);">
                            
                        </div>
                    </div>
                                <!--FIN CODIGO-->
                </div>
</main>
<?php include 'pies.php'?>
     