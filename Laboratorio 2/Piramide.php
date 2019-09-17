<?php include('Operaciones.php');
session_start();
$cadena=$_POST['CADENA'];
$c= new Operaciones("","$cadena","","","");
$c->Piramide();
?>
<br>
<br>
<a href="http://localhost:8080/SIS-256/Laboratorios/Laboratorio%202/">Volver al Menú</a>

