<?php include 'Cabezas.php'?>
            <main>

                <div class="card-body">
                                <!--INICIO CODIGO-->
                                <div class="card shadow-lg border-6 rounded-lg mt-2 card bg-ligth text-dark">
                                    <h6 class="card-header bg-info text-white">REGISTRO DE USUARIOS</h6>
                                    <div class="card-body">
                                        <form action="registro.php" method="POST">
                                            <label for="inputId" class="form-label">ID</label>
                                            <input type="text" name="id" id="id" class="form-control" disabled>
                                            <label for="inputUsuario" class="form-label">* USUARIO</label>
                                            <input type="text" name="usuario" id="usuario" class="form-control" value="">
                                            <label for="inputPassword" class="form-label">* CONTRASEÑA</label>
                                            <input type="text" name="password" id="password" class="form-control" value="">
                                            <!--OPTION SELECT -->
                                            <label for="inputTipo_usuario" class="form-label">* TIPO DE USUARIO</label>
                                            <input name="tipo_usuario" class="form-control" list="tipo_usuario" id="exampleDataList" value="">
                                            <datalist id="tipo_usuario">
                                                <option value="1] Administrador">
                                                <option value="2] Operador">
                                            </datalist>
                                            <br>
                                            <input type="submit" class="btn btn-info btn-sm" name="Grabar" value="Guardar Registro">
                                            <?php include 'save.php'?>
                                            
                                        </form>
                                     </div>    
                                </div>
                                <!--FIN CODIGO-->
                </div>
            </main>
            </div>
        </div>
<?php include 'pies.php'?>