<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");



$imagem=$_FILES['nomeImagem']['name'];
$novoNome="slideshowEstabelecimento/".$imagem;
copy($_FILES['nomeImagem']['tmp_name'],$novoNome);

$estabelecimentoId=intval($_POST['imagemEstabelecimento']);

$ordem=addslashes($_POST['ordemImagem']);




  $sql="insert into imagens(imagemNome,imagemEstabelecimentoId,imagemOrdem) values('../slideshowEstabelecimento/".$imagem."','".$estabelecimentoId."','".$ordem."');";
mysqli_query($con,$sql);
header("location:../lista/indexslideshow.php");
?>
