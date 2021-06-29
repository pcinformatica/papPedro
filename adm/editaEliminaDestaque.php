<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$sql="select categoriaDestaque from categorias";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
echo $sql="update categorias set categoriaDestaque ='nao'";

mysqli_query($con, $sql);


header("location:listaCategorias.php");
?>

