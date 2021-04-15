<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria1'];
$estabelecimentoId=intval($_POST['Estabelecimento']);
$DescricaoId=intval($_POST['Descricao']);

copy($_FILES['tmp_name']);

$sql="insert into estabelecimentocategorias(estabelecimentoCategoriaCategoriaId,estabelecimentoCategoriaEstabelecimentoId,estabelecimentoCategoriaDescricao) values('".$nome."','".$estabelecimentoId."','".$DescricaoId."');";
mysqli_query($con,$sql);
header("location:../lista/listanoticias.php");
?>
