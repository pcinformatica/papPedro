<script>
    function confirmaElimina(id) {
        if(confirm('Confirma que deseja eliminar a categoria?'))
            window.location="../elimina/eliminaCategoria.php?id=" + id;
    }

</script>

<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");

echo "<a href=\"../index.php\">Voltar</a>";
echo "<h1>Lista de Categorias</h1>";
echo "<table width=\"100%\">";
echo "<tr>";
echo "<td colspan=\"3\">";
echo "<a href=\"../novo/adicionaCategoria.php\">Adiciona</a>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nome</th>";
echo "<th>Imagem</th>";
echo "<th colspan=\"2\">Op��es</th>";
echo "</tr>";

//dados na base de dados
$sql="select * from categorias";
$result=mysqli_query($con,$sql);



while ($dados=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$dados['categoriaId']."</td>";
    echo "<td>".$dados['categoriaNome']."</td>";
    echo "<td><a href=\"../edita/editaCategoria.php?id=".$dados['categoriaId']."\"> Editar</a></td>";
    echo "<td><a href=\"#\" onclick=\"confirmaElimina(".$dados['categoriaId'].");\">Eliminar</a> </td>";

    echo "</tr>";

}



echo "</table>";


?>