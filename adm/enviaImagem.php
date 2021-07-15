<?php

print_r($_FILES['arquivo']);

$nomedoArquivo = $_FILES['arquivo']['name'];
$caminhoAtualArquivo =  $_FILES['arquivo']['tmp_name'];
$caminhoSalvar = '../slideshowImages/'.$nomedoArquivo;

;

if (move_uploaded_file($caminhoAtualArquivo,$caminhoSalvar)) {

    header("location: listaslideshow.php?inicio=true");
}else{
    echo "Arquivo não carregado!";

}












?>