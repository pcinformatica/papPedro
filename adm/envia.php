<?php

print_r($_FILES['arquivo']);

$nomedoArquivo = $_FILES['arquivo']['name'];
$caminhoAtualArquivo =  $_FILES['arquivo']['tmp_name'];
$caminhoSalvar = 'arquivos/'.$nomedoArquivo;

;

if (move_uploaded_file($caminhoAtualArquivo,$caminhoSalvar)) {

    header("location: imagem.php");
}else{
    echo "Arquivo não carregado!";

}












?>