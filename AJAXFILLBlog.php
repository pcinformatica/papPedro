<?php

ini_set("display_errors",true);

include_once ("blog.php");
include_once ("assets/js/common.js");

$nBlog=intval($_POST['nLivros']);
$txt=addslashes($_POST['texto']);
$con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
$sql="select * from noticias where noticiaTitulo LIKE '%$txt%' ";
if($nBlog>0)
    $sql.=' order by noticiaId desc limit '.$nBlog;

$res=mysqli_query($con,$sql);

while($dados=mysqli_fetch_array($res)) {

    $sql="select  noticiaTitulo, noticiaData, noticiaH from noticias where noticiaId  = ".$dados['noticiaId'];

    $resG=mysqli_query($con,$sql);

    $txt="";

    while($dadosG=mysqli_fetch_array($resG))

        $txt.=$dadosG['noticiaId'].'/';

    $txt=substr($txt,0,strlen($txt)-1);

    ?>




    <p><a href="#">Famoso fotógrafo chega a São Pedro de Moel</a></p>

    <p><a href="#">Projeto "Azul Mar" aprovada pela CMMG</a></p>

    <p><a href="#">Restaurante "Madeira Pinho" inaugura no Sábado </a></p>





<?php }