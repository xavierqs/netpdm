<?php

require_once __DIR__ . '/vendor/autoload.php';

$html= '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Net PDM</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
    <div id="logo" align="left">
        <img src="logo.png" style="width:50%">
      </div>
      <hr>
      <div style="text-align:center;">
      <h2>PLAN DE DESARROLLO 2020 - 2023</h2>
      <hr>
      <h3>INFORME GENERAL</h3>
      </div>
    </header>
    <main>
    <table>
        <thead>
          <tr>
            <th class="desc" style="text-align:left;">1. REPORTE DE AVANCE DE EJES</th>
          </tr>
        </thead>
        <tbody>';
        $mysqli = mysqli_connect('Localhost', 'root', '', 'netpdm');
        $consulta2="SELECT * FROM `reporte1` WHERE seccion='Ejes'";
        $resultado= $mysqli -> query($consulta2);
        while ($filas = $resultado -> fetch_assoc()){
            
        $html.='<tr>
            
           <td class="desc" style="text-align:justify;">'.$filas['descripcion'].'</td>';
            
        }
          $html.='</tr>
          
        </tbody>
      </table>
      <table>
        <thead>
          <tr>
            <th class="service" style="text-align:center;">ID</th>
            <th class="desc" style="text-align:center;">EJES</th>
            <th class="unit" style="text-align:center;">AVANCE</th>
          </tr>
        </thead>
        <tbody>';
        $mysqli = mysqli_connect('Localhost', 'root', '', 'netpdm');
        $consulta="SELECT * FROM `ejes`";
        $resultado= $mysqli -> query($consulta);
        $contador=0;
        while ($filas = $resultado -> fetch_assoc()){
            
        $html.='<tr>
            
            <td class="service" style="text-align:lefth;">'.$filas['id'].'</td>
            <td class="desc" style="text-align:lefth;">'.$filas['ejes'].'</td>
            <td class="unit" style="text-align:lefth;">'.$filas['avance'].'</td>';
        }
          $html.='</tr>
          
        </tbody>
      </table>
      <div id="logo">
        <img src="logo1.png" style="width:50%">
      </div>
      <table>
      <br>
        <thead>
          <tr>
            <th class="desc" style="text-align:left;">2. REPORTE DE AVANCE DE SECTORES</th>
          </tr>
        </thead>
        <tbody>';
        $mysqli = mysqli_connect('Localhost', 'root', '', 'netpdm');
        $consulta2="SELECT * FROM `reporte1` WHERE seccion='Sectores'";
        $resultado= $mysqli -> query($consulta2);
        while ($filas = $resultado -> fetch_assoc()){
            
        $html.='<tr>
            
           <td class="desc" style="text-align:justify;">'.$filas['descripcion'].'</td>';
            
        }
          $html.='</tr>
          
        </tbody>
      </table>
      <table>
        <thead>
          <tr>
            <th class="service" style="text-align:center;">ID</th>
            <th class="desc" style="text-align:center;">SECTOR</th>
            <th class="unit" style="text-align:center;">AVANCE</th>
          </tr>
        </thead>
        <tbody>';
        $mysqli = mysqli_connect('Localhost', 'root', '', 'netpdm');
        $consulta2="SELECT * FROM `sector`";
        $resultado2= $mysqli -> query($consulta2);
        $contador=0;
        while ($filas = $resultado2 -> fetch_assoc()){
            
        $html.='<tr>
            
            <td class="service" style="text-align:lefth;">'.$filas['id_sector'].'</td>
            <td class="desc" style="text-align:lefth;">'.$filas['sector'].'</td>
            <td class="unit" style="text-align:lefth;">'.$filas['avance'].'</td>';
        }
          $html.='</tr>
          
        </tbody>
      </table>
      <div id="logo">
        <img src="logo2.png" style="width:70%">
      </div>
      
      
      <div id="notices">
        <div></div>
        <div class="notice"></div>
        <div class="notice"></div>
      </div>
    </main>
    <footer>
      ALCALDIA DE SINCELEJO - UNIDOS TRANSFORMAMOS MÁS
    </footer>
  </body>
</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();