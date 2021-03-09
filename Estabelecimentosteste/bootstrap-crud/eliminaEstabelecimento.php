<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$sql= "delete from estabelecimentos where estabelecimentoId = '$id'";

mysqli_query($con,$sql);
header("location:../bootstrap-crud/testerest.php");
?>