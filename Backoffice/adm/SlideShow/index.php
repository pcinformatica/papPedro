
<?php

$registro = $_POST['Id'];

$tratamento = $_POST['Tratamento'];

//Pasta onde as imagens serão salvas
$pasta = "../../i";
//se não existir será criada
if (!file_exists($pasta)){
mkdir("$pasta", 0777);
}

$diretorio = "img/";

foreach ($registro as $Id => $estado) {

$url = $diretorio .  $_FILES['Imagem']['name'][$Id];

$nome_arquivo = $_FILES['Imagem']['name'][$Id];

// salva as imagens na pasta
move_uploaded_file($_FILES['Imagem']['tmp_name'][$Id], $url);

// insere o nome com extensão no banco de dados
$conn->query("UPDATE RegistoDiario SET Estado='$registro[$Id]', Imagem = '$nome_arquivo', Tratamento = '$tratamento[$Id]' WHERE Id='".$Id."'");

}
?>