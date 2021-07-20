<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["categoriaNome"]);
$Desconto=addslashes($_POST["categoriaDesconto"]);
$id=intval($_GET["id"]);
$sql="UPDATE precos SET precoNormal='".$Nome."',precoDesconto='".$Desconto."' where precoId=".$id;



mysqli_query($con,$sql);













mysqli_query($con,$sql);
header("location:listaPrecos.php");