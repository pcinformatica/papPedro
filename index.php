<?php
include_once('includes\functions.php');
topind();
Menuind();

?>
<!-- Main -->
<div id="main">










    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $dir = "slideshowImages";
            $cdir = scandir($dir);
            $cont = 0;
            foreach ($cdir as $key => $value) {
                if (!in_array($value, array(".", ".."))) {
                    ?>
                    <li data-target="#carouselExampleIndicators"
                        data-slide-to="<?php echo $cont; ?>" class="
                                <?php if ($cont == 0) {
                        echo " active ";

                    } ?>"></li>
                    <?php
                    $cont++;
                }

            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $cdir = scandir($dir);
            $cont = 0;
            foreach ($cdir as $key => $value) {
                if (!in_array($value, array(".", ".."))) {
                    ?>
                    <div class="carousel-item
						    <?php if ($cont == 0) {
                        echo " active ";

                    } ?>">

                        <img class="d-block w-100"
                             src="<?php echo $dir . "/" . $value ?>" alt="First slide">
                    </div>
                    <?php
                    $cont++;
                }
            }
            ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
           data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
           data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <br>

    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1>Encontre seu novo lugar para visitar!!</h1>
            <p> Banhando-se nas areias douradas do Atlântico, povoada de belas matas, a
                aldeia de S. Pedro propicia a quem a visita, locais inesquecíveis e de
                raro encanto.</p>
        </header>

        <br>




        <!-- Packages -->
        <?php
        include_once("config.inc.php");
        $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
        $con->set_charset("utf8");
        $sql = "SELECT * 
                                                from categorias
																								INNER JOIN estabelecimentos on estabelecimentoCategoriaId = categoriaId
																								where categoriaDestaque='sim' limit 6" ;

        $resultado = mysqli_query($con, $sql);


        ?>


        <?php
        include_once("config.inc.php");
        $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
        $con->set_charset("utf8");
        $sql = "SELECT * 
                                                from categorias inner join estabelecimentos on categoriaId=estabelecimentoCategoriaId 
                                                    where categoriaDestaque='sim' group by categoriaId limit 6" ;

        $resultadoCat = mysqli_query($con, $sql);
        ?>





        <?php
        while ($dadosCat = mysqli_fetch_array($resultadoCat) )  {
            $sql="Select * from estabelecimentos where estabelecimentoCategoriaId=".$dadosCat['categoriaId'];
            $resultadoEst=mysqli_query($con,$sql);
            ?>
            <h2 class="h2"><?php echo $dadosCat['categoriaNome'] ?></h2>
            <section class="tiles">
                <?php
                while ($dadosEst = mysqli_fetch_array($resultadoEst) )
                {
                    ?>



                    <article class="style1">
                                                            <span class="image">
                                                                <img src="<?php echo $dadosEst['estabelecimentoURL'] ?>" alt=""/>
                                                            </span>
                        <a href="package-details.php?id=<?php echo $dadosEst['estabelecimentoId'] ?>">
                            <h2><?php echo $dadosEst['estabelecimentoNome'] ?></h2>

                            <p><strong>€<?php echo $dadosEst['estabelecimentoPrecoMin'] ?> - €<?php echo $dadosEst['estabelecimentoPrecoMax'] ?></strong></p>

                            <p>
                                <small>
                                    <i class="fa fa-calendar"></i> Disponibilidade &nbsp;
                                    <i class="fa fa-cube"></i> Mínimo de 2 diárias &nbsp;
                                    <i class="fa fa-wifi"></i> Acesso à internet
                                </small>
                            </p>
                        </a>
                    </article>

                    <?php
                }?>
            </section>
            <p class="text-center"><a  href=" <?php echo $dadosCat['categoriaPaginaRelacionada'] ?>">Ver + &nbsp;<i
                        class="fa fa-long-arrow-right"></i></a></p>

            <?php
        }
        ?>

        </section>

        <br>



        <br>






        <br>
        <!--
        <h2 class="h2">Avaliações</h2>

        <div class="row">
            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"Muito bonita e acolhedora. E numa manhã de Setembro,
                        cheia de nevoeiro, fica ainda mais bonita, e misteriosa."</em>
                </p>

                <p><strong> - John Doe</strong></p>
            </div>

            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"E um lugar onde se admira a natureza e lugar pra
                        refletir."</em></p>

                <p><strong>- Ana Luíza</strong></p>
            </div>
        </div>





        <div class="location-search1 col-lg-12 mt-3 ">
            <h5>Nome do Estabelecimento</h5>

            <input class="location-search1 nice-select1" type="text" id="searchEstabelecimento">
        </div>


        <p class="text-center"><a href="testimonials.php">Consulte mais informação
                &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

                -->

        <br>

        <h2 class="h2">Blog</h2>

        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="images/blog-1-720x480.jpg" class="img-fluid" alt=""/>

                <h2 class="m-n"><a href="#">Famoso fotógrafo chega a São Pedro de
                        Moel</a></h2>

                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
            </div>

            <div class="col-sm-4 text-center">
                <img src="images/blog-2-720x480.jpg" class="img-fluid" alt=""/>

                <h2 class="m-n"><a href="#">Projeto "Azul Mar" aprovada pela CMMG</a>
                </h2>

                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
            </div>

            <div class="col-sm-4 text-center">
                <img src="images/blog-3-720x480.jpg" class="img-fluid" alt=""/>

                <h2 class="m-n"><a href="#">Restaurante "Madeira Pinho" inaugura no
                        Sábado </a></h2>

                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
            </div>
        </div>

        <p class="text-center"><a href="blog.php">Consulte mais informação &nbsp;<i
                    class="fa fa-long-arrow-right"></i></a></p>


    </div>
</div>




<?php
include_once('includes\functions.php');
footerind();
?>
