<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["estabelecimentoNome"]);
$Descricao1=addslashes($_POST["estabelecimentoDescricao1"]);
$Latitude=addslashes($_POST["estabelecimentoLatitude"]);
$Longitude=addslashes($_POST["estabelecimentoLongitude"]);

$id=intval($_GET["id"]);
$sql="UPDATE estabelecimentos SET estabelecimentoNome='".$Nome."', estabelecimentoDescricao='".$Descricao1."',estabelecimentoLatitude='".$Latitude."',estabelecimentoLongitude='".$Longitude."'
where estabelecimentoId=".$id;

mysqli_query($con,$sql);
header("location:../bootstrap-crudcat/indexestabelecimentos2.php");