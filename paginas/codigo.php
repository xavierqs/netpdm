
<!--CONEXION A LA BDD -->
<?php
   $query=mysqli_query($mysqli,"SELECT id, sector FROM sectores");
?>

<!--OPTION SELECT -->

  <select id="ddlselect" onchange="ddlselect();" class="form-control" placeholder="">
      <?php 
        while($datos = mysqli_fetch_array($query))
      {
      ?>
        <option value="<?php echo $datos['id']?>"><?php echo $datos['id'];echo " - ";echo $datos['sector']?></option>
      <?php
      }
      ?> 
  </select>

<!--  SCRIPT-->
<script>
      function ddlselect()
      {
        
        var d=document.getElementById("ddlselect");
        var displaytext=d.options[d.selectedIndex].text;
        document.getElementById("txtvalue").value=displaytext;
        var cod = document.getElementById("txtvalue").value;
        //alert(cod);
        var jsVar1 = cod;
        window.location.href = "?w1=" + jsVar1;
        
      }
</script>

<?php 
global $phpVar1;
if (isset($_GET["w1"])) {
    
    // asignar w1 y w2 a dos variables
    $phpVar1 = $_GET["w1"];
    //echo "<p>Parameters: " . $phpVar1 . "</p>";
   // echo "<p>$phpVar1;</p>";
    
} else {
    //echo "<p>No parameters</p>";
}
?>


