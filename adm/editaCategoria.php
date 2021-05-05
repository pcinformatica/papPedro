<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);
$sql="select * from categorias where categoriaId=".$id;
$resultCategorias=mysqli_query($con,$sql);
$dadosCategorias=mysqli_fetch_array($resultCategorias);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">





    <section class="store" style="padding:50px">
        <a href="../lista/listaCategorias.php"><button type="button" class="btn btn-light"">Voltar</button></a>
        <hr>
        <form action="../editar/confirmaEditaCategoria.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <label style="color:white; font-size: 15px" class="badge badge-dark">Nome: </label>
            <input type="text"  name="categoriaNome" value="<?php echo $dadosCategorias["categoriaNome"]?>"><hr>
            <input type="Submit" class="btn btn-success" value="Edita" ><br>
        </form>
    </section>

