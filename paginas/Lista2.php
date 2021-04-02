<!DOCTYPE html>

<!--CONEXION A LA BDD -->
<?php
       $query=mysqli_query($mysqli,"SELECT * FROM `programas` WHERE id_sector='$phpVar1'");
?>

<!--OPTION SELECT -->

  <select id="ddlselect2" onchange="ddlselect2();" class="form-control" placeholder="">
      <?php 
        while($datos = mysqli_fetch_array($query))
      {
      ?>
        <option value="<?php echo $datos['id_programa']?>"><?php echo $datos['id_programa'];echo " - ";echo $datos['programa']?></option>
      <?php
      }
      ?> 
  </select>

<!--  SCRIPT-->
<script>
      function ddlselect2()
      {
        var d=document.getElementById("ddlselect2");
        var displaytext=d.options[d.selectedIndex].text;
        document.getElementById("txtvalue2").value=displaytext;

      }
</script>
