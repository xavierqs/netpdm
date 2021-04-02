<?Php
$phpVar4=$_POST['secretaria'];
$file = file("c:/xampp/htdocs/netpdm/Tablero_PDM/$phpVar4.xlsx");
$file2= implode("", $file);
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$phpVar4.xlsx");
echo $file2;


?>