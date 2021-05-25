<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");



$nomeId=$_POST['descricaoNome'];
$estabelecimentoId=$_POST['categoriaEstabelecimento'];
$Descricao1=addslashes($_POST["estabelecimentoDescricao"]);

$id=intval($_GET["id"]);



$sql="UPDATE lendas SET lendaCulturalId='".$estabelecimentoId."',lendaDescricao='".$Descricao1."', lendaDescricaoTitu='".$nomeId."' where lendaCulturalId=".$id;

mysqli_query($con,$sql);
 header("location:listaDescricao.php");
?>

