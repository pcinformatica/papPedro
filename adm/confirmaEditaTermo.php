<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");



$id=intval($_GET["id"]);
$nome=addslashes($_POST["noticiaNome"]);
$info=addslashes($_POST["capacidadeInfo"]);
$info2=addslashes($_POST["pagtermo"]);




 $sql= " update termos SET termoTitulo='".$nome."',termoInfo='".$info."', pagtermos_pagtermoIdo='".$info2."'where termoId=".$id;



//mysqli_query($con,$sql);





header("location:listatermos.php");