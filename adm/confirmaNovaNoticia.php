<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria1'];
$DataId=$_POST['Data'];
$HoraId=$_POST['Hora'];






echo $sql="insert into noticias(noticiaTitulo,noticiaData,noticiasH) values('".$nome."','".$DataId."','".$HoraId."');";
mysqli_query($con,$sql);
 // header("location:../lista/listanoticias.php");
?>
