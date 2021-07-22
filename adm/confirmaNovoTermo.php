<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");





$categoriaId=$_POST['nomeCategoria5'];
$pagTermo1=intval($_POST['Termopag']);






echo $sql="insert into termos(termoTitulo,pagtermos_pagtermoId) values('".$categoriaId."','".$pagTermo1."');";
mysqli_query($con,$sql);

header("location:listatermos.php");
?>
