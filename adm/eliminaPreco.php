<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
 $sql= "delete from precos where precoId = '$id'";

mysqli_query($con,$sql);
header("location:listaPrecos.php");
?>