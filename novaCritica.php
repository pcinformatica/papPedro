<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect("localhost","root","","pap2021saopedro");
session_start();
$texto=addslashes($_POST['critica']);
$sql="insert into criticas values(0,'".$texto."',".$_SESSION['id'].")";
mysqli_query($con,$sql);
header("location:criticasEFeedBacks.php");
?>
