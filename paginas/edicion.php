<?php include 'Cabezas.php'?>
                                      
<main>
                <div class="card-body">
                                <!--INICIO CODIGO-->
                                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">EDITAR USUARIOS</h6>
                                    <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="mpi" width="100%" cellspacing="0">
                                    <thead class="table-primary">
                                    <tr style="text-align:center;">
                                                <th>ID</th>
                                                <th>USUARIO</th>
                                                <th>CONTRASEÑA</th>
                                                <th>ROL</th>
                                                <th>TIPO</th>
                                                <th>ACCION</th></p>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM usuario";
                                            $result_usuario = mysqli_query($mysqli, $query);
                                            while($row = mysqli_fetch_array($result_usuario)){?>
                                                <tr style="text-align:center;">
                                                    <td><?php echo $row['id']?></td>
                                                    <td><?php echo $row['usuario']?></td>
                                                    <td><?php echo $row['password']?></td>
                                                    <td><?php echo $row['nombre']?></td>
                                                    <td><?php echo $row['tipo_usuario']?></td>
                                                    <td>
                                                       <a href="edit.php?id=<?php echo $row['id'] ?>"class="btn btn-info"><i class="fas fa-highlighter"></i></a>
                                                       <a href="delete.php?id=<?php echo $row['id'] ?>"class="btn btn-info"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            
                                            <?php }?>
                                    </tbody>
                                </table>
                                

                                     </div>    
                                </div>
                                <!--FIN CODIGO-->
                </div>
                                      
                </main>

<?php include 'pies.php'?>