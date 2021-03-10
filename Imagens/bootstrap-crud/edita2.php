<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$sql="select * from imagens where imagemId=$id";
$resultImagens=mysqli_query($con,$sql);
$dadosImagens=mysqli_fetch_array($resultImagens);
?>
    <section class="store" style="padding:50px">
        <a href="Backoffice.php"><button type="button" class="btn btn-danger">Voltar</button></a>
        <hr>
        <form action="confirmaEditaEstabelecimento.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $dadosImagens['imagemId']?>">
            <label>Logótipo:</label><br>
            <img src="../<?php echo $dadosImagens['imagemNome']?>"><br>
            <input type="file" name="logoImagem"><br>


            <select name="imagemEstabelecimento">
                <option value="-1">Escolha o estabelecimento...</option>
                <?php
                $sql="select * from estabelecimentos order by estabelecimentoNome";
                $resultEstabelecimentos=mysqli_query($con,$sql);
                while ($dadosEstabelecimentos=mysqli_fetch_array($resultEstabelecimentos)){
                    ?>
                    <option value="<?php echo $dadosEstabelecimentos['estabelecimentoId']?>"
                        <?php
                        if($dadosImagens['imagemEstabelecimentoId']==$dadosEstabelecimentos['estabelecimentoId'])
                            echo " selected ";
                        ?>
                    >
                        <?php echo $dadosEstabelecimentos['estabelecimentoNome']?>
                    </option>
                    <?php
                }


                ?>
            </select>
            <label style="color:black; font-size: 15px" class="badge badge-dark">Ordem do Estabelecimento: </label>
            <input type="text"  name="estabelecimentoNome" value="<?php echo $dadosImagens["imagemOrdem"]?>"><hr>


            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>




















        </form>
    </section>
