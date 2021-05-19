<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");



$estabelecimentoId=intval($_POST['categoriaEstabelecimento']);
$Descricao1=addslashes($_POST["estabelecimentoDescricao"]);

$id=intval($_GET["id"]);



 $sql="UPDATE estabelecimentocategorias SET estabelecimentoCategoriaCategoriaId='".$estabelecimentoId."',estabelecimentoCategoriaDescricao='".$Descricao1."'where estabelecimentoCategoriaEstabelecimentoId=".$id;

mysqli_query($con,$sql);
 header("location:listaestabelecimentoscategorias.php");
?>

