<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

$numero=$_POST['numeroQuarto'];
$estabelecimento=$_POST['quartoEstabelecimento'];
$tipo=$_POST['quartoTipo'];
$preco=$_POST['quartoPreco'];





  $sql="insert into quartos(quartoNumero,quartoEstabelecimentoId,quartoQuartoTipoId,quartoPrecoId) values('".$numero."','".$estabelecimento."','".$tipo."','".$preco."');";
mysqli_query($con,$sql);
header("location:listaQuartos.php");
?>
