<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);
$sql="select * from categorias where categoriaId=".$id;

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

print_r(error_get_last());
?>

<h1>Editar</h1>

<form action="../../Categorias/confirmaEditaCategoria.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $id?>">

    <label>Nome:</label>
    <input type="text" name="nomeCategoria" value="<?php echo $dados['categoriaNome']?>">
    <br>

    <input type="submit" value="Edita">
</form>
