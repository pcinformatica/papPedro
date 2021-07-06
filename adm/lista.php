<?php


    $pasta = "../arquivos/";
    $diretorio = dir($pasta);

while($arquivo = $diretorio->read()){
    if($arquivo != '.' && $arquivo != '..'){
        echo "<a href='".$pasta.$arquivo."'><img src='".$pasta.$arquivo."' width='50'>".$arquivo."</a><br>";

    }
?>
    <a href="unlink.php?img=<?php echo $pasta.$arquivo; ?>"> Exluir arquivo</a>
<?php
}
?>