<?php
    require "conexion.php";
    session_start();
    $mensaje="";
    if ($_POST) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM usuario WHERE usuario='$usuario'";
        $resultado=$mysqli->query($sql);
        $num = $resultado->num_rows;
        

        if($num>0){
            $row = $resultado->fetch_assoc();
            $password_bd = $row['password'];
            $pass_c = $password;
            
            if ($password_bd == $pass_c){
               
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

                header("Location: principal.php");

            } else {
                
                $mensaje="¡Contraseña incorrecta!";
                
            }

        }else {
                
                $mensaje="¡Usuario inexistente!";
        }
    }
           
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Net PDM</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    
    <body class="bg-secundary">
    <!----- BARRA DE ENTRADA PRINCIPAL -->
    <div> 
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand"><i class="fas fa-globe"></i> Net PDM</a>
            
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                   <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
    </div>
    <!----- FIN BARRA DE ENTRADA PRINCIPAL -->
    <!-- Navbar-->        
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 card bg-info text-white">
                                    <div class="card-header"><h6 class="text-center font-weight-primary my-1"><i class="fas fa-globe"></i> Net PDM</h3></div>
                                    <div class="card-body card bg-ligth text-dark">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                            <div class="form-group">
                                                <label class="small mb-2" for="inputUsuario">USUARIO</label>
                                                <input class="form-control py-4" id="inputUsuario" name="usuario" type="text" placeholder="Ingrese el usuario"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-"2 for="inputPassword">CONTRASEÑA</label>
                                                <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Ingrese la contraseña"/>
                                            </div>
                                            <div class="form-group"><h6 class="text-center font-weight-primary my-2">
                                                <label><?php echo $mensaje;?></label>
                                            </div>
                                            <div class="form-group" ><h1 class="text-center font-weight-primary my-2">
                                                <button type="submit" class="btn btn-info btn-block" >Iniciar Sesión</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>  
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
