<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");



$imagem=$_FILES['nomeImagem']['name'];
$novoNome="images/".$imagem;
copy($_FILES['nomeImagem']['tmp_name'],$novoNome);

$categoriaId=intval($_POST['imagemCategoria']);

$nome=addslashes($_POST['nomeSetor']);




  $sql="insert into setores(setorURL,setorCategoriaId,setorNome) values('images/".$imagem."','".$categoriaId."','".$nome."');";
mysqli_query($con,$sql);
header("location:listaSetores.php");
?>
