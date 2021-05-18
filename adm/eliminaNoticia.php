<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);


   $sql= "delete  from noticias
where   noticiaId = '$id'  ";


$resultado = mysqli_query($con,$sql);






header("location:listanoticias.php");
?>
