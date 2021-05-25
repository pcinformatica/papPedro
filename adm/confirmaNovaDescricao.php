<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria1'];
$cultural=$_POST['categoriaEstabelecimento'];


//copy($_FILES['tmp_name']);

 $sql="insert into setorcultural(setorculturalDescricaoTitu,setorculturalCulturalId) values('".$nome."','".$cultural."');";
mysqli_query($con,$sql);
 header("location:listaDescricao.php");
?>
