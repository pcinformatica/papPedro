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
            <h1> <?php echo $dadosEstabelecimentos["estabelecimentoNome"] ?> <span class="pull-right">€1094 - €1500</span></h1>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                    class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            </ol>
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
            <div class="col-lg-4 col-md-5">
                <h3>Informações //teste</h3>

                <p>
                    - Acessível: Disponiblidade <br>
                    - Mínimo de 2 diárias <br>
                    - Hidromassagem <br>
                    - Acesso à internet <br>
                    - T6 <br>
                    -Estacionamento
                </p>

                <span class="image main"><img src="images/map.jpg" alt=""/></span>

                <a href="#footer" class="button primary scrolly">Enquiry</a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
                    <a href="#" class="btn btn-primary pull-right h2">Nova notícia</a>

                </div>
            </div>

            <h3>Disponibilidade &amp; Preços</h3>

            <div class="table-responsive">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                    <thead>
                    <tr>
                        <th>Pacote</th>
                        <th>De</th>
                        <th>Até</th>
                        <th>Preço</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Natal</td>
                        <td>01-11-2020</td>
                        <td>27-12-2020</td>
                        <td>€ 1200 por noite</td>
                    </tr>

                    <tr>
                        <td>Ano Novo</td>
                        <td>28-2020</td>
                        <td>3-01-2021</td>
                        <td>€ 1500 por noite</td>
                    </tr>

                    <tr>
                        <td>Janeiro</td>
                        <td>4-01-2021</td>
                        <td>31-01-2021</td>
                        <td>€ 1094 por noite</td>
                    </tr>
                    <tr>
                        <td>Romântico</td>
                        <td>01-02-2020</td>
                        <td>31-02-2020</td>
                        <td>€ 1094 por noite</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <br>

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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.340411692422!2d-9.027388888116578!3d39.75446477913937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22057614184209%3A0x28b689c316955980!2sAv.%20das%20Piscinas%2026%2C%202430-492%20M.nha%20Grande!5e0!3m2!1spt-BR!2spt!4v1605265482844!5m2!1spt-BR!2spt"
                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
    </section>
    <!-- End Map section -->
    <br>
    </div>

    <br>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo "<form action=\"../adm/confirmaNovaNoticia.php\" method=\"post\" enctype='multipart/form-data'>";



                    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";




                    ?>








                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Data</label>
                        <div class="col-10">
                            <input class="form-control" type="date"  name="Data" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Hora</label>
                        <div class="col-10">
                            <input class="form-control" type="time" name="Hora" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                </div>


                <div class="modal-footer">

                    <?php
                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                    echo" <button type=\"Submit\" class='btn btn-primary'>Save changes</button> ";
                    ?>

                </div>
            </div>
        </div>
    </div>





<?php
include_once('includes\functions.php');

footerpackd();
?>