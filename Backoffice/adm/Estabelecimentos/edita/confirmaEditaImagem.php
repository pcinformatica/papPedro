<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$Ordem=addslashes($_POST['imagemOrdem']);
$id=intval($_POST['id']);

$idEstabelecimento=intval($_POST['imagemEstabelecimento']);

$imagem=$_FILES['logoImagem']['name'];
$novoNome="images/".$imagem;

$sql="Update imagens set imagemOrdem='".$Ordem."', imagemEstabelecimentoId = '".$idEstabelecimento."'";

if($imagem!=''){
    $sql.=", imagemEstabelecimentoId='/images/".$imagem."'";
    copy($_FILES['logoImagem']['tmp_name'],$novoNome);
}


$sql.=" where imagemId=".$id;




mysqli_query($con,$sql);
print_r($sql);
//header("location:../bootstrap-crudcat/indexcategorias.php");

?>

