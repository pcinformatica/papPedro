<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);

$sql="select * from ficheiros inner join cultural  where ficheiroId=".$id;
$resultEstabelecimentos=mysqli_query($con,$sql);
$dadosEstabelecimentos=mysqli_fetch_array($resultEstabelecimentos);
?>
<!DOCTYPE HTML>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <section class="store" style="padding:50px">



        <a href="../lista/listaficheiros.php"><button type="button" class="btn btn-danger">Voltar</button></a>
        <hr>
        <form action="../editar/confirmaEditaFicheiros.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Nome da Caracteristica: </label>
            <input type="text"  name="ficheiroNome" value="<?php echo $dadosEstabelecimentos["ficheiroNome"]?>">

            <label style="color:white; font-size: 15px" class="badge badge-dark">Codigo da Caracteristica: </label>
            <input type="text"  name="ficheiroURL" value="<?php echo $dadosEstabelecimentos["ficheiroURL"]?>">









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






            <hr>

            </div>


            <hr>



            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>











        </form>
    </section>
