<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$sql= "delete from quartotipo where quartoTipoId = '$id'";

mysqli_query($con,$sql);
header("location:listaQuartosTipos.php");
?>