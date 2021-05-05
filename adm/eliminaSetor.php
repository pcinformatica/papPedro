<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$sql= "delete from setores where setorId = '$id'";

mysqli_query($con,$sql);
header("location:../lista/listaSetores.php");
?>