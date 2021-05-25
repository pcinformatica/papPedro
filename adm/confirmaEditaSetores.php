<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["setorNome"]);

$estabelecimentoId=intval($_POST['categoriaEstabelecimento']);

$id=intval($_POST['imagemId']);
$imagem=$_FILES['nomeImagem']['name'];
$novoNome="../images/".$imagem;

 $sql= " update setores SET setorNome='".$Nome."', setorCategoriaId='".$estabelecimentoId."'";
if($imagem!=''){
   $sql.=", setorURL='images/".$imagem."'";
    copy($_FILES['imagem']['tmp_name'],$novoNome);
}
$sql.=" where setorId=".$id;





mysqli_query($con,$sql);
header("location:listaSetores.php");