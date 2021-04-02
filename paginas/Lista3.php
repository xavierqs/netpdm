<!DOCTYPE html>

<!--CONEXION A LA BDD -->
<?php
       $query=mysqli_query($mysqli,"SELECT * FROM `mpi` WHERE cod_meta='40-1'");
?>

<!--OPTION SELECT -->

  <select id="ddlselect3" onchange="ddlselect3();" class="form-control" placeholder="">
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
      function ddlselect3()
      {
        var d=document.getElementById("ddlselect3");
        var displaytext=d.options[d.selectedIndex].text;
        document.getElementById("txtvalue2").value=displaytext;

      }
</script>
