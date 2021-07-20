<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);


   $sql= "delete  from quartos
where   quartoId = '$id'  ";


$resultado = mysqli_query($con,$sql);






header("location:listaQuartos.php");
?>
