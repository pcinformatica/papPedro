<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$nome=$_POST['nomeCategoria1'];
$nome2=$_POST['nomeCategoria2'];
$cut=$_POST['categoriaEstabelecimento'];




 $sql="insert into ficheiros(ficheiroNome,ficheiroURL,ficheiroCulturalId) values('".$nome."','".$nome2."','".$cut."');";
mysqli_query($con,$sql);
header("location:listaFicheiros.php");
?>
