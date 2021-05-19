<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["culturalNome"]);



$id=intval($_POST['imagemId']);
$imagem=$_FILES['nomeImagem']['name'];
$novoNome="../images/".$imagem;

  $sql= " update cultural SET culturalNome='".$Nome."'";
if($imagem!=''){
    $sql.=", culturalURL='images/".$imagem."'";
    copy($_FILES['imagem']['tmp_name'],$novoNome);
}
$sql.=" where culturalId=".$id;





mysqli_query($con,$sql);
header("location:listacultural.php");