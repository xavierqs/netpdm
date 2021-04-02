
     <select class="form-select" id="ddlselect" onchange="ddlselect();">
        <option> Tipo de Gráfica</option>
        <option value="bar">BARRAS</option>
        <option value="pie">CIRCULO</option>
        <option value="line">LINEA</option>
        <option value="radar">RADAR</option>
        <option value="doughnut">ROSCA</option>
        <option value="polarArea">AREA POLAR</option>
    </select>

<!--  SCRIPT-->
<script>
      function ddlselect()
      {
        
        var d=document.getElementById("ddlselect");
        var displaytext=d.options[d.selectedIndex].value;
        var displaytext2=d.options[d.selectedIndex].text;
        var cod = displaytext;
        var cod2 = displaytext2;
        //alert(cod);
        var jsVar1 = cod;
        var jsVar2 = cod2;
        window.location.href = "?w1=" + jsVar1 + "&w2=" + jsVar2;;
        
        
      }
</script>

<?php 
global $phpVar2;
global $phpVar3;
if (isset($_GET["w1"])) {
    
    // asignar w1 y w2 a dos variables
    $phpVar2 = $_GET["w1"];
    $phpVar3 = $_GET["w2"];
    //echo "<p>Parameters: " . $phpVar1 . "</p>";
   //echo "<p>$phpVar2</p>";
    
} else {
    //echo "<p>No parameters</p>";
}
?>

