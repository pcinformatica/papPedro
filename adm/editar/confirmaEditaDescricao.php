<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");



$nomeId=$_POST['descricaoNome'];
$estabelecimentoId=$_POST['categoriaEstabelecimento'];
$Descricao1=addslashes($_POST["estabelecimentoDescricao"]);

$id=intval($_GET["id"]);



echo  $sql="UPDATE setorcultural SET setorculturalCulturalId='".$estabelecimentoId."',setorculturalDescricao='".$Descricao1."', setorculturalDescricaoTitu='".$nomeId."' where setorculturalId=".$id;

mysqli_query($con,$sql);
 //header("location:../lista/listaDescricao.php");
?>

