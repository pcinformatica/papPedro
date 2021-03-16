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
        <form action="../edita/confirmaEditaEstabelecimento.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <label style="color:black; font-size: 15px" class="badge badge-dark">Nome de Estabelecimento: </label>
            <input type="text"  name="estabelecimentoNome" value="<?php echo $dadosEstabelecimentos["estabelecimentoNome"]?>"><hr>

            <label style="color:black; font-size: 15px" class="badge badge-dark">Morada do Estabelecimento: </label>
            <input type="text"  name="estabelecimentoMorada" value="<?php echo $dadosEstabelecimentos["estabelecimentoMorada"]?>"><hr>

            <label style="color:black; font-size: 15px" class="badge badge-dark">Telefone do Estabelecimento: </label>
            <input type="text"  name="estabelecimentoTelefone" value="<?php echo $dadosEstabelecimentos["estabelecimentoTelefone"]?>"><hr>

            <label style="color:black; font-size: 15px" class="badge badge-dark">Email do Estabelecimento: </label>
            <input type="text"  name="estabelecimentoEmail" value="<?php echo $dadosEstabelecimentos["estabelecimentoEmail"]?>"><hr>

            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>


        </form>
    </section>
