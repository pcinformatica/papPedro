<?php
include_once('includes\functions.php');
toppackd();
Menupackd();
?>


    <?php
    $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");



    ?>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <?php
            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
            $id = intval($_GET["id"]);
            $sql = "select * from estabelecimentos where estabelecimentoId=" . $id;
            $resultEstabelecimentos = mysqli_query($con, $sql);
            $dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos);
            ?>
            <h1> <?php echo $dadosEstabelecimentos["estabelecimentoNome"] ?> <span class="pull-right">Venha Descobrir!</span></h1>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                           <!--
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                    class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            </ol>
                            -->
                            <div class="carousel-inner">
                                <?php
                                $controle_ativo = 2;
                                $sql = "Select * from imagens where imagemEstabelecimentoId=" . $id;
                                $resultImagens = mysqli_query($con, $sql);
                                while ($dadosImagens = mysqli_fetch_array($resultImagens)){ ?>
                                    <?php
                                    if ($controle_ativo == 2) { ?>
                                        <div class="carousel-item active ">
                                            <img class="d-block w-100 "
                                                 src=" <?php echo $dadosImagens['imagemNome'] ?>"
                                                 alt="First slide">
                                        </div> <?php
                                        $controle_ativo = 1;
                                    } else {
                                        ?>
                                        <div class="carousel-item ">
                                        <img class=" d-block w-100"
                                             src=" <?php echo $dadosImagens['imagemNome'] ?>"
                                             alt="First slide">
                                        </div><?php
                                    }

                                }
                                ?>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                               role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                               role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>


                </div>
            </div>

            <br>
            <br>

            <div class="container-fluid">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">



                </div>
                <h3>Descrição</h3>
                <?php
                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                $id = intval($_GET["id"]);
                $sql = "select * from estabelecimentos where estabelecimentoId=" . $id;
                $resultEstabelecimentos = mysqli_query($con, $sql);
                $dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos);


                ?>


                <?php echo $dadosEstabelecimentos["estabelecimentoDescricao"] ?></
            >


            <br>


            <br>


            <br>
<!--
            <h3>Info</h3>

            <ul class="list-group list-group-no-border">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p class="pjVpProductPolicyTitle">
                                <strong>Check-in</strong>
                            </p>
                        </div>
                        <div class="col-md-10 col-sm-9">
                            <p>
                                Perguntar pela disponiblidade.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p>
                                <strong>Check-out</strong>
                            </p>
                        </div>

                        <div class="col-md-10 col-sm-9">
                            <p>
                                Perguntar pela disponiblidade.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p>
                                <strong>Animais</strong>
                            </p>
                        </div>
                        <div class="col-md-10 col-sm-9">
                            <p>
                                Permetida ter animais.
                            </p>
                        </div>
                    </div>
                </li>


            </ul>
-->

        </div>
    </div>


    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->

    <!-- End header section -->


    <!-- Start slider  -->


    <!-- Top slider single slide -->


    <!-- Start Map section -->
    <section id="mu-map">
        <iframe src="<?php echo  $dadosEstabelecimentos['estabelecimentoGoogle'] ?>"""
                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
    </section>
    <!-- End Map section -->
    <br>
    </div>

    <br>







<?php
include_once('includes\functions.php');

footerpackd();
?>