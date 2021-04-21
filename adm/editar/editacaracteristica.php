<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);

$sql="select * from caracteristicas inner join cultural  where caracteristicaId=".$id;
$resultEstabelecimentos=mysqli_query($con,$sql);
$dadosEstabelecimentos=mysqli_fetch_array($resultEstabelecimentos);
?>
<!DOCTYPE HTML>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <section class="store" style="padding:50px">



        <a href="../lista/listacultural.php"><button type="button" class="btn btn-danger">Voltar</button></a>
        <hr>
        <form action="../editar/confirmaEditaCaracteristica.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Nome da Caracteristica: </label>
            <input type="text"  name="caracteristicaNome" value="<?php echo $dadosEstabelecimentos["caracteristicaNome"]?>">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Codigo da Caracteristica: </label>
            <input type="text"  name="caracteristicaCodigo" value="<?php echo $dadosEstabelecimentos["caracteristicaCodigo"]?>">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Tipologia da Caracteristica: </label>
            <input type="text"  name="caracteristicaTipologia" value="<?php echo $dadosEstabelecimentos["caracteristicaTipologia"]?>">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Distancia da Caracteristica: </label>
            <input type="text"  name="caracteristicaDistancia" value="<?php echo $dadosEstabelecimentos["caracteristicaDistancia"]?>">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Tipo de piso da Caracteristica: </label>
            <input type="text"  name="caracteristicaTipoPiso" value="<?php echo $dadosEstabelecimentos["caracteristicaTipoPiso"]?>">



            <label style="color:white; font-size: 15px" class="badge badge-dark">Local de Partida: </label>
            <input type="text"  name="caracteristicaLocalPartida" value="<?php echo $dadosEstabelecimentos["caracteristicaLocalPartida"]?>">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Local de Chegada: </label>
            <input type="text"  name="caracteristicaLocalChegada" value="<?php echo $dadosEstabelecimentos["caracteristicaLocalChegada"]?>">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Coordenadas geográficas: </label>
            <input type="text"  name="caracteristicaCoordenadaGeograficas" value="<?php echo $dadosEstabelecimentos["caracteristicaCoordenadaGeograficas"]?>">













            <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Hora</label>
                <div class="col-10">
                    <input class="form-control" type="time" name="Hora" value="<?php echo $dadosEstabelecimentos["caracteristicaDuracaoAproximada"]?>" id="example-time-input">
                </div>
            </div>
            </div>



            <hr>





            <label style="color:white; font-size: 15px" class="badge badge-dark">Categoria: </label>

            <select name="categoriaEstabelecimento">
                <option value="-1"><?php echo  $dadosEstabelecimentos["culturalNome"]?></option>

                <?php
                $sql="SELECT *
                      from  cultural  order by culturalNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['culturalId']?>"><?php echo $dados['culturalNome']?></option>








                    <?php
                }


                ?>
            </select>

            <label style="color:white; font-size: 15px" class="badge badge-dark">Categoria: </label>
            <select name="categoriaEstabelecimento2">
                <option ><?php echo  $dadosEstabelecimentos["caracteristicaGrauDificuldade"]?></option>
                <?php


                echo  " <option value='Facil'>Facil</option>";
                echo  " <option value='Medio'>Medio</option>";
                echo  " <option value='Dificil'>Dificil </option>";


                ?>
            </select><hr>




            <hr>

            </div>


            <hr>



            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>











        </form>
    </section>
