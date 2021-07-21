<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
session_start();
$texto=addslashes($_POST['critica']);
echo $sql="insert into criticas values(0,'".$texto."',".$_SESSION['id'].")";
mysqli_query($con,$sql);
header("location:criticasefeedBacks.php");
?>

