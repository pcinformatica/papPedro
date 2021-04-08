<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria1'];
$morada=$_POST['moradaEstabelecimento1'];
$telefone=$_POST['telefoneEstabelecimento1'];
$email=$_POST['emailEstabelecimento1'];
$desc=$_POST['descrEstabelecimento1'];

copy($_FILES['tmp_name']);

$sql="insert into estabelecimentos(estabelecimentoNome,estabelecimentoDescricao,estabelecimentoMorada,estabelecimentoTelefone,estabelecimentoEmail) values('".$nome."','".$desc."','".$morada."','".$telefone."','".$email."');";
mysqli_query($con,$sql);
header("location:../lista/listaestabelecimentos.php");
?>
