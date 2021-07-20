<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Numero=addslashes($_POST["quartoNum"]);
$Capacidade=addslashes($_POST["quartoCap"]);
$CapInfo=addslashes($_POST["capacidadeInfo"]);
$QuartoInfo=addslashes($_POST["quartoInformacoes"]);
$Desp=addslashes($_POST["Disponiblidade"]);
$QuaEst=addslashes($_POST["quartoEstabelecimento"]);
$Tipos=addslashes($_POST["quartoTipos"]);
$Preco=addslashes($_POST["quartoPreco"]);
$id=intval($_GET["id"]);




 $sql= " update quartos SET quartoNumero='".$Numero."', quartoCapacidade='".$Capacidade."',quartoCapacidadeInfo='".$CapInfo."',quartoInformacoes='".$QuartoInfo."', quartoDisponiblidade='".$Desp."',quartoEstabelecimentoId='".$QuaEst."',quartoQuartoTipoId='".$Tipos."',quartoPrecoId='".$Preco."'where quartoId=".$id;







mysqli_query($con,$sql);
header("location:listaQuartos.php");
?>