<?php include 'Cabezas.php'?>
<main>
                <div class="card-body">
                                <!--INICIO CODIGO-->
                                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">ALMACENAR DATOS AL PLAN INDICATIVO</h6>
                                    <div class="card-body">
                                            
                                            <div class="card border-secondary" style="max-width: 100%;">
                                            <div class="card-body text-dark">
                                                <!--Selector de SECTORES -->
                                            <label for="id_sector" class="form-label">Selecciona el sector</label>
                                            <?php include 'codigo.php';?> 
                                            <!--Selector de PROGRAMAS -->  
                                            <label for="id_sector" class="form-label">Selecciona el programa</label>
                                            <?php include 'lista2.php';?> 
                                            </div>
                                            </div>
                                            
                                            
                                        <form action="save_mpi.php" method="POST">
                                            <!--Selector de EJES -->
                                            <input type="hidden" name="txtvalue" id="txtvalue" class="form-control" placeholder="" disabled>
                                            <label for="programa" class="form-label">PROGRAMA</label>
                                            <input type="text" name="txtvalue2" id="txtvalue2" class="form-control" placeholder="">
                                            <label for="subprograma" class="form-label">SUBPROGRAMA</label>
                                            <input type="text" name="subprograma" id="subprograma" class="form-control" placeholder="">
                                            <label for="año" class="form-label">AÑO</label>
                                            <input type="text" name="año" id="año" class="form-control" placeholder="">
                                            <?php include 'sel_ejes.php';?>
                                            <label for="linea_base" class="form-label">LINEA BASE</label>
                                            <input type="text" name="linea_base" id="linea_base" class="form-control" placeholder="">
                                            <label for="meta_resultado" class="form-label">META DE RESULTADO</label>
                                            <input type="text" name="meta_resultado" id="meta_resultado" class="form-control" placeholder="">
                                            <label for="indicador" class="form-label">INDICADOR</label>
                                            <input type="text" name="indicador" id="indicador" class="form-control" placeholder="">
                                            <label for="meta_cuatrenio" class="form-label">META CUATRIENIO</label>
                                            <input type="text" name="meta_cuatrenio" id="meta_cuatrenio" class="form-control" placeholder="">
                                            <label for="meta_producto" class="form-label">META PRODUCTO</label>
                                            <input type="text" name="meta_producto" id="meta_producto" class="form-control" placeholder="">
                                            <label for="indicador_producto" class="form-label">INDICADOR DE PRODUCTOS</label>
                                            <input type="text" name="indicador_producto" id="indicador_producto" class="form-control" placeholder="">
                                            <label for="num_mpro" class="form-label">NUMERO DE METAPRODUCTOS</label>
                                            <input type="text" name="num_mpro" id="num_mpro" class="form-control" placeholder="">
                                            <label for="compromiso" class="form-label">COMPROMISO</label>
                                            <input type="text" name="compromiso" id="compromiso" class="form-control" value="1" placeholder="">
                                            <label for="cumpli_2020" class="form-label">CUMPLIMIENTO</label>
                                            <input type="text" name="cumpli_2020" id="cumpli_2020" class="form-control" value="1" placeholder="">
                                            <label for="valor_mp" class="form-label">VALOR META PRODUCTO</label>
                                            <input type="text" name="valor_mp" id="valor_mp" class="form-control" placeholder="">
                                            <label for="logrado_pro" class="form-label">LOGRADO</label>
                                            <input type="text" name="logrado_pro" id="logrado_pro" class="form-control" placeholder="">
                                            <label for="avance" class="form-label">AVANCE</label>
                                            <input type="text" name="avance" id="avance" class="form-control" placeholder="">
                                            <!--Selector de Tipo de META -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cod_meta" id="1" value="1" checked>
                                                <label class="form-check-label" for="1">
                                                    Meta de Resultado
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cod_meta" id="2" value="2" checked>
                                                <label class="form-check-label" for="2">
                                                    Meta de Producto
                                                </label>
                                                </div>
                                            <br>
                                            <input type="submit" class="btn btn-info btn-sm" name="Grabar" value="Guardar Registro">
                                        </form>
                                     </div>    
                                </div>
                                <!--FIN CODIGO-->
                </div>
                </main>
<?php include 'pies.php'?>