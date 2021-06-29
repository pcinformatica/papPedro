<?php
$id=intval($_GET['id']); // categorias escolhida
include_once("../includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$sql="select categoriaDestaque, categoriaId, categoriaNome from categorias where categoriaId=".$id;
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
$sql="update categorias set categoriaDestaque ='sim' where categoriaId=".$id;


mysqli_query($con, $sql);

header("location:../adm/listaCategorias.php?id=");
?>

