<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$Nome=addslashes($_POST["estabelecimentoNome"]);
$Morada=addslashes($_POST["estabelecimentoMorada"]);
$Telefone=addslashes($_POST["estabelecimentoTelefone"]);
$Email=addslashes($_POST["estabelecimentoEmail"]);
$Descricao1=addslashes($_POST["estabelecimentoDescricao"]);
$Descricao2=addslashes($_POST["estabelecimentoInfoCategoria"]);
$Latitude=addslashes($_POST["estabelecimentoLatitude"]);
$Longitude=addslashes($_POST["estabelecimentoLongitude"]);
$PrecMin=addslashes($_POST["estabelecimentoPrecoMin"]);
$PrecMax=addslashes($_POST["estabelecimentoPrecoMax"]);


$id=intval($_POST['imagemId']);
$imagem=$_FILES['nomeImagem']['name'];
$novoNome="../images/".$imagem;

 $sql= " update estabelecimentos SET estabelecimentoNome='".$Nome."', estabelecimentoMorada='".$Morada."',estabelecimentoTelefone='".$Telefone."',estabelecimentoEmail='".$Email."', estabelecimentoInfoCatog='".$Descricao2."',estabelecimentoDescricao='".$Descricao1."',estabelecimentoLatitude='".$Latitude."',estabelecimentoLongitude='".$Longitude."',estabelecimentoPrecoMin='".$PrecMin."',estabelecimentoPrecoMax='".$PrecMax."'";
if($imagem!=''){
    $sql.=", estabelecimentoURL='images/".$imagem."'";
    copy($_FILES['nomeImagem']['tmp_name'],$novoNome);
}
$sql.=" where estabelecimentoId=".$id;





mysqli_query($con,$sql);
header("location:listaEstabelecimentos.php");
?>