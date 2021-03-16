<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);
$sql="select * from estabelecimentos where estabelecimentoId=".$id;
$resultEstabelecimentos=mysqli_query($con,$sql);
$dadosEstabelecimentos=mysqli_fetch_array($resultEstabelecimentos);
?>
    <section class="store" style="padding:50px">
        <a href="Backoffice.php"><button type="button" class="btn btn-danger">Voltar</button></a>
        <hr>
        <form action="../edita/confirmaEditaEstabelecimento3.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <label style="color:black; font-size: 15px" class="badge badge-dark">Nome de Estabelecimento: </label>
            <input type="text"  name="estabelecimentoNome" value="<?php echo $dadosEstabelecimentos["estabelecimentoNome"]?>"><hr>




            <hr>
            <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name="estabelecimentoDescricao1" >      <?php echo $dadosEstabelecimentos["estabelecimentoDescricao"]?></textarea>

           <br>






            <label style="color:black; font-size: 15px" class="badge badge-dark">Latitude do Estabelecimento: </label>
            <input type="text"  name="estabelecimentoLatitude" value="<?php echo $dadosEstabelecimentos["estabelecimentoLatitude"]?>">

            <label style="color:black; font-size: 15px" class="badge badge-dark">Longitude do Estabelecimento: </label>
            <input type="text"  name="estabelecimentoLongitude" value="<?php echo $dadosEstabelecimentos["estabelecimentoLongitude"]?>">




            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>


        </form>
    </section>
