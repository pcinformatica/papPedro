<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");




$categoriaId=intval($_POST['nomeCategoria1']);






$sql="insert into pagtermos(pagtermoTitulo) values('".$categoriaId."');";
mysqli_query($con,$sql);
header("location:termopagina.php");
?>
