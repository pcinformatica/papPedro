<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);





   echo  $sql=   "delete from termos where  termoId = '$id'";
    mysqli_query($con,$sql);






//header("location:listatermos.php");
?>
