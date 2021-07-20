<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria1'];


copy($_FILES['tmp_name']);

$sql="insert into quartotipo(quartoTipo) values('".$nome."');";
mysqli_query($con,$sql);
header("location:listaQuartosTipos.php");
?>
