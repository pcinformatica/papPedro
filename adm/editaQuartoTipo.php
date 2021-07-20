<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$con->set_charset("utf-8");
$id=intval($_GET["id"]);
$sql="select * from quartotipo where quartoTipoId=".$id;
$resultCategorias=mysqli_query($con,$sql);
$dadosCategorias=mysqli_fetch_array($resultCategorias);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">





    <section class="store" style="padding:50px">
        <a href="listaQuartosTipos.php"><button type="button" class="btn btn-light"">Voltar</button></a>
        <hr>
        <form action="comfirmaEditaQuartoTipo.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <label style="color:black; font-size: 15px" class="badge badge-white">Nome: </label>
            <input type="text"  class="col-2 col-form-label  " name="categoriaNome" value="<?php echo $dadosCategorias["quartoTipo"]?>">









            <input type="Submit" class="btn btn-success" value="Edita" ><br>
        </form>
    </section>

