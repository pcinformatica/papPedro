<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria1'];
$setor=$_POST['categoriaEstabelecimento'];
$imagem=$_FILES['nomeImagem']['name'];
$novoNome="slideshowEstabelecimento/".$imagem;
copy($_FILES['nomeImagem']['tmp_name'],$novoNome);



  $sql="insert into cultural(culturalNome,culturalURL,setoresSetorId) values('".$nome."','images/".$imagem."','".$setor."');";
mysqli_query($con,$sql);
  header("location:../lista/listacultural.php");
?>
