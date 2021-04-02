<?php include 'Cabezas.php'?>
<main>
    <div class="card-body">
        <div class="card shadow-sm">
                    <h6 class="card-header bg-info text-white">SUBIR EJES</h6>
                            <div class="card-body">
                                        <form action="subir_ejes.php" method="POST" name="uploadCsv" enctype="multipart/form-data">
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
                                                
                                                <th>ID</th>
                                                <th>EJES</th>
                                                <th>AVANCE</th>
                                                
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include 'conexion.php';
                                            $query = "SELECT * FROM ejes";
                                            $result_ejes = mysqli_query($mysqli, $query);
                                            while($row = mysqli_fetch_array($result_ejes)){?>
                                                <tr style="text-align:rigth;">
                                                   
                                                    <td width="5%"><?php echo $row['id']?></td>
                                                    <td><?php echo $row['ejes']?></td>
                                                    <td style="text-align:center;"><?php echo $row['avance']?></td>
                                                   
                                                    
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