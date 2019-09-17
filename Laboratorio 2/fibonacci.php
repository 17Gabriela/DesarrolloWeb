<?php include("Operaciones.php");
$a = new Operaciones($_GET["num"],"",0,0,0);
$a->CalcularFibonacci();
?>
<br>
<br>
<br><a href="http://localhost:8080/SIS-256/Laboratorios/Laboratorio%202/">Volver al Menú</a>
