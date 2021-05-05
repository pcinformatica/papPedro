<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["categoriaNome"]);
$id=intval($_GET["id"]);
$sql="UPDATE categorias SET categoriaNome='".$Nome."' where categoriaId=".$id;

mysqli_query($con,$sql);
header("location:../lista/listaCategorias.php");