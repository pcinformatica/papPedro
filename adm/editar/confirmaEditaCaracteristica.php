<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$id=intval($_GET["id"]);

$Nome=addslashes($_POST["caracteristicaNome"]);
$Cod=addslashes($_POST["caracteristicaCodigo"]);
$Tip=addslashes($_POST["caracteristicaTipologia"]);
$Dist=addslashes($_POST["caracteristicaDistancia"]);
$Piso=addslashes($_POST["caracteristicaTipoPiso"]);
$Part=addslashes($_POST["caracteristicaLocalPartida"]);
$Cheg=addslashes($_POST["caracteristicaLocalChegada"]);
$CD=addslashes($_POST["caracteristicaCoordenadaGeograficas"]);
$Hora=addslashes($_POST["Hora"]);
$Cat=addslashes($_POST["categoriaEstabelecimento"]);
$Cat2=addslashes($_POST["categoriaEstabelecimento2"]);

echo $sql="UPDATE caracteristicas SET caracteristicaNome='".$Nome."',caracteristicaCodigo='".$Cod."',caracteristicaTipologia='".$Tip."',caracteristicaDistancia='".$Dist."',caracteristicaDuracaoAproximada='".$Hora."',caracteristicaTipoPiso='".$Piso."',caracteristicaGrauDificuldade='".$Cat2."',caracteristicaLocalPartida='".$Part."',caracteristicaLocalChegada='".$Cheg."',caracteristicaCoordenadaGeograficas='".$CD."',caracteristicaCulturalId='".$Cat."', where caracteristicaId=".$id;





mysqli_query($con,$sql);





 //header("location:../lista/listaNoticias.php");