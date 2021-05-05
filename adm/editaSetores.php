<?php

$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);
$sql="select * from setores inner join categorias on setorCategoriaId=categoriaId where setorId=".$id;
$resultCategorias=mysqli_query($con,$sql);
$dadosCategorias=mysqli_fetch_array($resultCategorias);
?>
<!DOCTYPE HTML>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <section class="store" style="padding:50px">



        <a href="../lista/listaSetores.php"><button type="button" class="btn btn-danger">Voltar</button></a>
        <hr>
        <form action="../editar/confirmaEditaSetores.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Nome do Setor: </label>
            <input type="text"  name="setorNome" value="<?php echo $dadosCategorias["setorNome"]?>"><hr>








            <hr>




            <hr>
            <script>
                function preview_image(event) {
                    var reader = new FileReader();
                    reader.onload = function () {
                        var output = document.getElementById('output_image');
                        output.src = reader.result;
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script>
            <div class="container">
                <h2 align="center" style="margin-top: 10%">

                        <input type="hidden" name="imagemId" value="<?php echo $id ?>">

                        <label>Imagem Inicial:</label><br>
                        <img width="400" id="output_image" src="../../<?php echo $dadosCategorias['setorURL']?>"><br>
                    <input type="file" name="nomeImagem"><br>


            </div>


            <hr>
            <label style="color:white; font-size: 15px" class="badge badge-dark">Categoria: </label>
            <select name="categoriaEstabelecimento">
                <option value="-1"><?php echo $dadosCategorias["categoriaNome"]?></option>
                <?php
                $sql="SELECT *
        from  categorias  order by categoriaNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>


                    <?php
                }


                ?>
            </select><hr>
            <hr>


            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>











        </form>
    </section>
