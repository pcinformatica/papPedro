<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria'];


copy($_FILES['tmp_name']);

$sql="insert into categorias(categoriaNome) values('".$nome."');";
mysqli_query($con,$sql);
header("location:../bootstrap-crud/testerest.php");
?>
