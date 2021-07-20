<?php
include_once('includes\functions.php');
toppost();
Menupost();

?>

    <?php
    $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");

    $id = intval($_GET["id"]);
    $sql = "SELECT * from noticias  where noticiaId=".$id;
    $resultado = mysqli_query($con, $sql);
    $dados = mysqli_fetch_array($resultado);
    ?>
    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1><?php echo $dados ['noticiaTitulo'] ?></h1>

            <div class="image main">
                <img src="<?php echo $dados ['noticiaURLFundo'] ?>" class="img-fluid" alt=""/>
            </div>


            <p><?php echo $dados ['noticiaDescricao'] ?></p>



        </div>
    </div>

    <div class="details-text">
        <?php
        $sql="select * from comentarios inner join perfis on comentarioPerfilId=perfilid where comentarioEntidade like 'noticia' and comentarioEntidadeId=$id order by comentarioData desc";
        $resultComents=mysqli_query($con,$sql);
        $i=0;
        while ($dadosComents=mysqli_fetch_array($resultComents)){
            ?>

            <div class="dt-quote" style="width: 100%">
                <div style="color: white;">
                    <span><b><?php echo $dadosComents["perfilNome"]?></b></span>
                    <span style="float: right"><b><?php echo $dadosComents["comentarioData"]?></b></span>
                </div>
                <hr>
                <br>
                <p><?php echo $dadosComents["comentarioTexto"]?></p>

                <div class="row" style="margin-left: 5px">
                    <span  id="btnLike" onclick="countClicks(this)" class="fa fa-thumbs-up text-secondary" style="font-size: 20px; margin-right: 5px"></span>
                    <span  id="btnDislike" onclick="countClicks2(this)" class="fa fa-thumbs-down text-secondary" style="font-size: 20px; margin-left: 5px"></span>
                    <span style="margin-left: 90%"><a href="Elimina/eliminaComentario.php?id=<?php echo $dadosComents['comentarioId'];?>" ><i class="fa fa-trash"></i></a></span>
                </div>
            </div>






            <?php
        }
        ?>


        <?php
        if(isset($_SESSION['id'])){
            ?>

            <div class="dt-leave-comment" style="margin-top: 10%">

                <span style="font-size: 30px; color: #FFFFFF"> &nbsp;<strong>Deixa um comentário:</strong> </span>
                <form action="Confirma/ConfirmaAdicionaComentarioNoticia.php?id=<?php echo $id?>" style="padding-top: 20px" method="post">

                    <textarea required spellcheck="true" name="comentarioTexto"  rows="100" placeholder="Message" style="color: #FFFFFF; font-size: 17px"></textarea>
                    <input type="hidden" name="comentarioEntidade" value="noticia">
                    <button type="submit">Comentar</button>
                </form>
            </div>

            <?php
        }else{
        ?>
        <hr>
        <div style="margin: 30px; font-size: 20px; color: #FFFFFF">
                            <span>Para comentar nesta review  <span onclick="document.getElementById('id01').style.display='block'"><a href="#" style="font-family: 'Montserrat', sans-serif; color: #FFFFFF; font-size: 17px;">
                                            <span class="badge badge-light" style="color: black; font-size: 16px">Login</span></a></span></span>
            <div>
                <hr>
                <?php
                }
                ?>
                <!-- ************************************************FIM************************************************-->

            </div>
        </div>
    </div>



<?php
include_once('includes\functions.php');

footerpost();
?>