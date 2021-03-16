<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["estabelecimentoNome"]);
$Morada=addslashes($_POST["estabelecimentoMorada"]);
$Telefone=addslashes($_POST["estabelecimentoTelefone"]);
$Email=addslashes($_POST["estabelecimentoEmail"]);

$id=intval($_GET["id"]);
$sql="UPDATE estabelecimentos SET estabelecimentoNome='".$Nome."', estabelecimentoMorada='".$Morada."',estabelecimentoTelefone='".$Telefone."',estabelecimentoEmail='".$Email."'
where estabelecimentoId=".$id;

mysqli_query($con,$sql);
header("location:../lista/indexestabelecimentos.php");