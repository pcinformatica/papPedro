<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["categoriaNome"]);
$id=intval($_GET["id"]);
$sql="UPDATE quartotipo SET quartoTipo='".$Nome."' where quartoTipoId=".$id;

mysqli_query($con,$sql);
header("location:listaQuartosTipos.php");