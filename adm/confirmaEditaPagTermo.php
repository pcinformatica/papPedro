<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["noticiaNome"]);





$id=intval($_POST['imagemId']);
$id2=intval($_POST['imagemId2']);
$imagem=$_FILES['nomeImagem']['name'];

$novoNome="../images/".$imagem;
$novoNome2="../images/".$imagem;
if($con ){


    $sql= " update pagtermos SET pagtermoTitulo='".$Nome."'";
    if($imagem!=''){
        $sql.=", pagtermoURL='images/".$imagem."'";
        copy($_FILES['nomeImagem']['tmp_name'],$novoNome);
    }
    $sql.=" where pagtermoId=".$id;

    mysqli_query($con,$sql);
}




header("location:termopagina.php");