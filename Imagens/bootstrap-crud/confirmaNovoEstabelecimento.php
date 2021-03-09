<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$ordem=$_POST['ordemImagem'];
$estabelecimentoId=intval($_POST['imagemEstabelecimento']);
$imagem=$_FILES['nomeImagem']['name'];
$novoNome="../imagens/".$imagem;

copy($_FILES['nomeImagem']['tmp_name'],$novoNome);

copy($_FILES['nomeImagem']['tmp_name'],$novoNome);

$sql="insert into imagens(imagemOrdem,imagemNome,imagemEstabelecimentoId,) values('".$ordem."','imagens/".$imagem."','".$estabelecimentoId."');";
mysqli_query($con,$sql);
header("location:../bootstrap-crud/testerest.php");
?>
