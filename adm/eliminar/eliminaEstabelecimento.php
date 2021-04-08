<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
 $sql= "delete from estabelecimentos where estabelecimentoId = '$id'   or  inner join estabelecimentocategorias on  estabelecimentoCategoriaEstabelecimentoId = estabelecimentoId ";

mysqli_query($con,$sql);
header("location:../lista/listaEstabelecimentos.php");
?>