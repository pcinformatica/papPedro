<?php
$con = mysqli_connect("localhost", "root", "","pap2021saopedro");
$id=intval($_GET["id"]);
$Nome=addslashes($_POST["ficheiroNome"]);
$URL=addslashes($_POST["ficheiroURL"]);
$Cut=addslashes($_POST["categoriaEstabelecimento"]);

echo $sql="UPDATE ficheiros SET ficheiroNome='".$Nome."',ficheiroURL='".$URL."' where ficheiroId=".$id;

mysqli_query($con,$sql);





if($id=intval($_GET["id"])) {

    echo $sql = "UPDATE ficheiros SET ficheiroCulturalId='" . $Cut . "' where ficheiroId=" . $id;

    mysqli_query($con, $sql);
}

// header("location:listaficheiros.php");