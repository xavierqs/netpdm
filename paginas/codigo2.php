  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
            <form action="codigo2.php" method="post">
                <div style="width:900px; margin:0 auto; border:1px solid #FCC; padding: 10px;">
                    <!--SELECCION DEL ID DEL SECTOR-->
                    <?php include 'codigo.php';?>
                    <!--SELECCION DEL ID DEL SECTOR-->
                    
                            <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-primary text-white">AVANCE DE LAS METAS DE PRODUCTO</h6>
                                    
                                    <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="mpi" width="100%" cellspacing="0">
                                    <thead class="table"> 
                                            <tr>
                                                <th>ID PROGRAMA</th>
                                                <th>ID SECTOR</th>
                                                <th>PROGRAMA</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                   
                                        <?php
                                            $estado=$_POST['estado'];
                                            $query = "SELECT * FROM `programas` WHERE id_sector=$estado";
                                            $result_mpi = mysqli_query($mysqli, $query);
                                            while($row = mysqli_fetch_array($result_mpi)){?>
                                                <tr>
                                                    <td><?php echo $row['id_programa']?></td>
                                                    <td><?php echo $row['id_sector']?></td>
                                                    <td><?php echo $row['programa']?></td>
                                                                                                          
                                                </tr>
                                            
                                            <?php }?>
                                    </tbody>
                                </table>
                                            </div>
                        </div>
                </div>
            </form>
  </body>
  </html>


