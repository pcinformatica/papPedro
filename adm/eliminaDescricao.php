<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$sql= "delete from setorcultural where setorculturalId = '$id'";

mysqli_query($con,$sql);
header("location:listaDescricao.php");
?>


