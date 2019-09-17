<?php include("Operaciones.php");
$b = new Operaciones(0,"",$_GET["num1"],$_GET["num2"],$_GET["num3"]);
$b->CalcularMenor();
?>
<br>
<br>
<br><a href="http://localhost:8080/SIS-256/Laboratorios/Laboratorio%202/">Volver al Menú</a>