<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["pagNome"]);

$Descricao1=addslashes($_POST["pagDescricao"]);


$id=intval($_POST['imagemId']);
$imagem=$_FILES['nomeImagem']['name'];

$novoNome="../images/".$imagem;


if($con ){


      $sql= " update saopedro SET saopedroTitulo='".$Nome."', noticiaDescricao='".$Descricao1."'";
    if($imagem!=''){
        $sql.=", saopedroURL='images/".$imagem."'";
        copy($_FILES['nomeImagem']['tmp_name'],$novoNome);
    }
      $sql.=" where saopedroId=".$id;

    mysqli_query($con,$sql);
}




header("location:sobreSPM.php");



