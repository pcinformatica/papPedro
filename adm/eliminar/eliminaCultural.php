<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$sql= "delete from cultural where culturalId = '$id'";

mysqli_query($con,$sql);
header("location:../lista/listacultural.php");
?>