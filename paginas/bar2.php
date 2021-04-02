<?php include 'Cabezas.php'?>
<main>

                <div class="card-body">
                                <!--INICIO CODIGO-->
                                
                                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">AVANCE SECTORES</h6>
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead class="table-primary"> 
                                            <tr style="text-align:center;">
                                                    
                                                    <th>SECTOR</th>
                                                    <th>PROGRESO</th>
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM sector";
                                            $result_sector = mysqli_query($mysqli, $query);
                                            while($row = mysqli_fetch_array($result_sector)){?>
                                                <tr style="text-align:justify;">
                                                    
                                                    <td width="25%"><?php echo $row['sector']?></td>
                                                    
                                                    <td width="">
                                                            <div class="progress" style="height:35px">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $row['avance_r']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><h6><?php echo $row['avance_r']?>%</h6></div>
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $row['avance_a']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><h6><?php echo $row['avance_a']?>%</h6></div>
                                                            <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo $row['avance_v']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><h6><?php echo $row['avance_v']?>%</h6></div>
                                                            </div>
                                                </tr>
                                                        
                                        <?php }?>
                                    </tbody>
                                    </table>
                                         <div>   
                                            <?php include 'codigo3.php';?>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#ventanaModal">Gráfica</button>
                            </div>
                </div>
<!-----VENTANA MODAL 1--->
<div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        
                
            <h5 class="card-header bg-primary text-white">GRÁFICA DE <?php echo $phpVar3?><button class="close" data-dismiss="modal" aria-label="cerrar">
                      <span aria-hidden="true">&times;</span>
            </button></h5>
                    
            <div class="card-body">
                                <!--INICIO CODIGO DE LA TABLA DENTRO DE LA VENTANA MODAL-->
                                
  		<div style="width: 100%" class="align-center">
		  <canvas id="myChart" width="400" height="170"></canvas>
          
		</div>
                <script>
                var ctx= document.getElementById("myChart").getContext("2d");
                var myChart= new Chart(ctx,{
                    type:"<?php echo $phpVar2?>",
                    data:{
                        labels:[<?php 
                    $sql = "SELECT * FROM sector";
                    $result = mysqli_query($mysqli,$sql);
                    while ($registros = mysqli_fetch_array($result))
                    {
                    ?>
                    '<?php echo $registros["sector"] ?>',
                    <?php 
                    }
                    ?>],
                        datasets:[{
                                label:'SECTOR',
                                data:[<?php 
                    $sql = "SELECT * FROM sector";
                    $result = mysqli_query($mysqli,$sql);
                    while ($registros = mysqli_fetch_array($result))
                    {
                    ?>
                    '<?php echo $registros["avance"] ?>',
                    <?php 
                    }
                    ?>],
                                backgroundColor:[
                                    'rgb(66, 134, 244,0.5)',
                                    'rgb(74, 135, 72,0.5)',
                                    'rgb(229, 89, 50,0.5)',	
                                    'rgb(66, 134, 244,0.5)',
                                    'rgb(74, 135, 72,0.5)',
                                    'rgb(229, 89, 50,0.5)',
                                    'rgb(66, 134, 244,0.5)',
                                    'rgb(74, 135, 72,0.5)'
                                ]
                        }]
                    },
                    options:{
                        scales:{
                            yAxes:[{
                                    ticks:{
                                        beginAtZero:true
                                    }
                            }]
                        }
                    }
                });
            </script>
            
        </div>	
    </div>
</div>
<!---FIN VENTA MODAL 1-->

</main>

<?php include 'pies.php'?>
