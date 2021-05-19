<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["noticiaNome"]);

$Descricao1=addslashes($_POST["noticiaDescricao"]);
$Data=addslashes($_POST["Data"]);
$Hora=addslashes($_POST["Hora"]);



$id=intval($_POST['imagemId']);
$id2=intval($_POST['imagemId2']);
$imagem=$_FILES['nomeImagem']['name'];

$novoNome="../images/".$imagem;
$novoNome2="../images/".$imagem;
if($con ){


  $sql= " update noticias SET noticiaTitulo='".$Nome."', noticiaDescricao='".$Descricao1."',noticiaData='".$Data."', noticiasH='".$Hora."'";
if($imagem!=''){
    $sql.=", noticiaURL='images/".$imagem."'";
    copy($_FILES['imagem']['tmp_name'],$novoNome);
}
$sql.=" where noticiaId=".$id;

mysqli_query($con,$sql);
}




 header("location:listaNoticias.php");