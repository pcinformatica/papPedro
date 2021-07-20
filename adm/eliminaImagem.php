<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$estId=intval($_GET['estId']);
 $sql= "delete from imagens where imagemId = '$id'";

mysqli_query($con,$sql);
header("location:listaslideshow.php?id=".$estId);
?>