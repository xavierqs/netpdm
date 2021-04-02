<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Net PDM (SECTORES)</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
  <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href=""><i class="fas fa-globe"></i> Net PDM</a></nav>
            <main>
    
       
    <div style="height:10px"></div>
     
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="table-primary"> 
                                                    <tr style="text-align:center;">
                                                        <!--<th>ID SECTOR</th>-->
                                                        
                                                        <th>ID</th>
                                                        <th>SECTOR</th>
                                                        <th>AVANCE</th>
                                                        
                                                       
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    include 'conexion.php';
                                                    $query = "SELECT * FROM sector";
                                                    $result_ejes = mysqli_query($mysqli, $query);
                                                    while($row = mysqli_fetch_array($result_ejes)){?>
                                                        <tr style="text-align:lefth;">
                                                            <td width="5%"><?php echo $row['id_sector']?></td>
                                                            <td><?php echo $row['sector']?></td>
                                                            <td width="10%"><?php echo $row['avance']?>%</td>
                                                        </tr>
                                                    <?php }?>
                                            </tbody>
                                                <td><input type="submit" class="btn btn-primary btn-SM" value="Regresar" onClick="history.go(-1);"></td>
                                                <td></td>
                                                <td></td>
                                         
                                        </table> 
                                                                                
                                        
                    </div>
                </div>
        </div>  
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>
