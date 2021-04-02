<?php include 'Cabezas.php'?>
<main>
                <div class="card-body">
                                <!--INICIO CODIGO-->
                                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">EDITAR MATRIZ DEL PLAN INDICATIVO</h6>
                                    <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="edita_mpi" width="100%" cellspacing="0">
                                <thead class="table-primary"> 
                                            <tr style="text-align:center;">
                                                <th>PROGRAMA</th>
                                                <th>META RESULTADO</th>
                                                <th>META CUATRENIO</th>
                                                <th>META PRODUCTO</th>
                                                <th>COMPROMISO</th>
                                                <th>CUMPLIMIENTO</th>
                                                <th>ACCION</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $query = "SELECT * FROM mpi";
                                            $result_mpi = mysqli_query($mysqli, $query);
                                            while($row = mysqli_fetch_array($result_mpi)){?>
                                                <tr style="text-align:center;">
                                                    <td><?php echo $row['programa']?></td>
                                                    <td><?php echo $row['meta_resultado']?></td>
                                                    <td><?php echo $row['meta_cuatrienio']?></td>
                                                    <td><?php echo $row['meta_producto']?></td>
                                                    <td><?php echo $row['compromiso']?></td>
                                                    <td><?php echo $row['cumplimiento']?></td>
                                                    
                                                    <td>
                                                       <a href="edit_mpi.php?id=<?php echo $row['id'] ?>"class="btn btn-info"><i class="fas fa-highlighter"></i></a>
                                                       <a href="delete_mpi.php?id=<?php echo $row['id'] ?>"class="btn btn-info"><i class="fas fa-trash-alt"></i></a>
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
            </div>
        </div>
<?php include 'pies.php'?>
<script>
        $(function () {
    $("#edita_mpi").DataTable({

      "language": {

    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sSearch":         "Buscar:",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
}
   
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
        </script>