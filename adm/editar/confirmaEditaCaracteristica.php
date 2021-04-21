<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$id=intval($_GET["id"]);

$Nome=$_POST["caracteristicaNome"];
$Cod=$_POST["caracteristicaCodigo"];
$Tip=$_POST["caracteristicaTipologia"];
$Dist=$_POST["caracteristicaDistancia"];
$Piso=$_POST["caracteristicaTipoPiso"];
$Part=$_POST["caracteristicaLocalPartida"];
$Cheg=$_POST["caracteristicaLocalChegada"];
$CD=$_POST["caracteristicaCoordenadaGeograficas"];


$Hora=addslashes($_POST["Hora"]);
$Cat=addslashes($_POST["categoriaEstabelecimento"]);
$Cat2=addslashes($_POST["categoriaEstabelecimento2"]);





echo $sql="UPDATE caracteristicas SET caracteristicaNome='".$Nome."',caracteristicaCodigo='".$Cod."', caracteristicaTipologia='".$Tip."',
 caracteristicaDistancia='".$Dist."',caracteristicaTipoPiso='".$Piso."',caracteristicaLocalPartida='".$Part."',
 caracteristicaLocalChegada='".$Cheg."',caracteristicaCoordenadaGeograficas='".$CD."' , caracteristicaDuracaoAproximada='".$Hora."', caracteristicaGrauDificuldade='".$Cat2."' where caracteristicaId=".$id;
mysqli_query($con,$sql);




if($id=intval($_GET["id"])){

     $sql="UPDATE caracteristicas SET caracteristicaCulturalId='".$Cat."' where caracteristicaId=".$id;
    mysqli_query($con,$sql);


}











 //header("location:../lista/listacultural.php");