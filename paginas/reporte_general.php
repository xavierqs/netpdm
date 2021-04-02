<?php include 'Cabezas.php'?>
<main>

                <div class="card-body">
                                <!--INICIO CODIGO-->
                                
                                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">GENERADOR DE INFORMES</h6>
                                <div class="card-body">
                                <div class="table-responsive">
                                <form action="reporte_general.php" method="POST">
                                <div class="mb-3">
                                    <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                     
                                </div>
                                            <label for="inputTipo_seccion" class="form-label">Tipo de sección</label>
                                            <input name="seccion" class="form-control" list="tipo_seccion" id="exampleDataList" value="">
                                            <datalist id="tipo_seccion">
                                                <option value="1] Ejes">
                                                <option value="2] Sectores">
                                                <option value="2] Programas">
                                            </datalist>
                                            <br>
                                            <input type="submit" class="btn btn-info btn-sm" name="Grabar" value="Guardar Informe">
                                            <a href="reporte.php" class="btn btn-info btn-sm">Editar Informe</a>
                                            <?php include 'save_reporte.php'?>
                                        </form>
                                       </div>
                </div>
<div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                <h6 class="card-header bg-info text-white">SUBIR GRÁFICA A NETPDM</h6>
                                <div class="card-body">
                                <!--INICIO CODIGO-->
                                <div class="table-responsive">
                                <form action="sube_imagen.php" method="POST" enctype="multipart/form-data">
                                    Selecciona la imagen: <input name="archivo" id="archivo" type="file"/>
                                    <input type="submit" name="subir" value="Subir imagen"/>
                                </form>
                                <hr>
                               <a href="general.php" class="btn btn-info btn-sm" target="_blank">Generar Informe PDF</a>
                                        
</div>
</main>
<?php include 'pies.php'?>
