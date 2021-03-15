<?php
echo "<h1>Adicionar nova empresa</h1>";
echo "<form action=\"confirmaNovaEmpresa.php\" method=\"post\" enctype='multipart/form-data'>";
echo "<label>Nome: </label>";
echo "<input type=\"text\" name=\"nomeEmpresa\"><br>";
echo "<label>Logótipo:</label>";
echo "<input type=\"file\" name=\"logoEmpresa\"><br>";
echo "<input type=\"Submit\" value=\"Adiciona\"><br>";

?>

