
     <select class="form-select" id="ddlselect" onchange="ddlselect();">
        <option>Secretaría</option>
        <option value="salud">Salud</option>
        <option value="educacion">Educación</option>
        <option value="gobierno">Gobierno</option>
        <option value="economico">Económico</option>
        <option value="social">Social</option>
        <option value="infraestructura">Infraestructura</option>
    </select>

<!--  SCRIPT-->
<script>
      function ddlselect()
      {
        
        var d=document.getElementById("ddlselect");
        var displaytext=d.options[d.selectedIndex].value;
        var cod = displaytext;
        //alert(cod);
        var jsVar1 = cod;
        window.location.href = "?w1=" + jsVar1;
        
        
      }
</script>

<?php 
global $phpVar4;
if (isset($_GET["w1"])) {
    
    // asignar w1 y w2 a dos variables
    $phpVar4 = $_GET["w1"];
    
    //echo "<p>Parameters: " . $phpVar1 . "</p>";
   //echo "<p>$phpVar2</p>";
    
} else {
    //echo "<p>No parameters</p>";
}
?>

