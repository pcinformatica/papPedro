<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
 $sql= "delete from ficheiros where ficheiroId = '$id'";

mysqli_query($con,$sql);
header("location:../lista/listaficheiros.php");
?>