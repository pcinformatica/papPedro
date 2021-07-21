<?php
include_once('includes\functions.php');

topblog();
Menublog();


?>



    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>Notícias</h1>

            <div class="image main">
                <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt=""/>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-9">
                        <div class="row">

                            <?php
                            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                            $sql = "SELECT * from noticias";

                            $resultado = mysqli_query($con, $sql);


                            ?>

                            <?php
                            while ($dados = mysqli_fetch_array($resultado)) {
                                ?>

                                <div class="col-sm-5 text-center">

                                    <img src="<?php echo $dados ['noticiaURL'] ?>" class="img-fluid" alt=""/>

                                    <h2 class="m-n"><a href="noticiaInfo.php?id=<?php echo $dados  ['noticiaId'] ?>"><?php echo $dados  ['noticiaTitulo'] ?></a></h2>

                                    <p> John Doe &nbsp;|&nbsp; <?php echo $dados  ['noticiaData'] ?> <?php echo $dados  ['noticiasH'] ?> </p>
                                </div>



                                <?php
                            }?>



                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <h4>Pesquisa</h4>
                        </div>


                        <div class="form-group">

                        </div>

                        <br>


                        <div  class="form-group">
                            <div class="input-group">
                                <form action="noticias.php?search=$_POST['search']">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Pesquisar"
                                               aria-label="Search" aria-describedby="basic-addon2" id="search" name="search" value="">


                                        <button  class="buttonicon" type="submit2"><i  class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>


                        </div>

                        <!--
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search"
                                                                               aria-label="Search" aria-describedby="basic-addon2" id="search" name="search" value="">

                                                                        <span class="input-group-addon"type="submit"><a href="#"><i
                                                                                        class="fa fa-search"type="submit"></i></a></span>
                                                                    </div>


                                                                         <div class="text-right">
                                                                                    <input type="text" class="form-control" placeholder="Search"   aria-label="Search" aria-describedby="basic-addon2" id="search" name="search" value="">
                                                                                    <button class="buttonicon" type="submit2"><i class="fa fa-search"></i></button>



                                                                                </div>

                        -->
                        <?php

                        $sql="Select noticiaTitulo, noticiaId, noticiasH, noticiaData from noticias";

                        $categ=0;
                        $tipo=0;
                        $genero="";
                        if (isset($_GET['search']) or isset($_GET['cat'])  or isset($_GET['tip']) or isset($_GET['gen'])){
                            $sql.=" where ";
                            if (isset($_GET['search'])){
                                $filtro = $_GET['search'];
                                $sql.=" noticiaTitulo like \"".$filtro."%\"";
                                $sql .= " and ";
                            }


                            if (substr($sql, -5) == " and ") $sql = substr($sql,0, strlen($sql)-5);

                        }

                        $result=mysqli_query($con,$sql) or die (mysqli_error($con));

                        while($dados=mysqli_fetch_array($result)){

                            /*
                            https://phpdelusions.net/mysqli_examples/search_filter

                            */

                            ?>

                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="noticiaInfo.php?id=<?php echo $dados['noticiaId']; ?>"> <?php echo "".$dados['noticiaTitulo']."</a>";?> </>

                                    </div>





                                </div>
                            </div>
                            <?php
                        }

                        ?>



                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/common.js"></script>


    <script>
        $('document').ready(function () {

            <?php
            if($menu == ESTABELECIMENTOSP){
            ?>

            $('#searchEstabelecimento').keyup(function () {
                fillTableEstabelecimentosProcurar(this.value, $('#searchCategoria').val(), $('#searchDistrito').val());
            });
            $('#searchCategoria').change(function () {
                fillTableEstabelecimentosProcurar($('#searchEstabelecimento').val(), this.value, $('#searchDistrito').val());
            });
            $('#searchDistrito').change(function () {
                fillTableEstabelecimentosProcurar($('#searchEstabelecimento').val(), $('#searchCategoria').val(), this.value);
            });
            fillTableEstabelecimentosProcurar();

            <?php }
            if ($menu == GALERIA){
            ?>
            $('#search').keyup(function () {
                fillTableImagens(this.value,<?php echo $id ?>);
            });
            fillTableImagens('',<?php echo $id ?>);
            <?php }
            ?>
            <?php
            if ($menu == RESERVAS){
            ?>
            $('#search').keyup(function () {
                fillTableReservas(this.value,<?php echo $id ?>);
            });
            fillTableReservas('',<?php echo $id ?>);
            <?php
            }if($menu == SINGLE){
            ?>
            listaComentarios(<?php echo $id ?>);
            <?php
            }if($menu == RESERVASADMIN){
            ?>
            $('#tableContent').keyup(function () {
                fillTableReservasAdmin(this.value,<?php echo $id ?>);

            });
            fillTableReservasAdmin(<?php echo $id ?>);
            <?php
            if($menu == HOME ){
            ?>
            $('#tableContent').keyup(function () {
                valido(this.value);
            });
            valido();
            <?php
            }
            }
            ?>
        })
    </script>

<?php
include_once('includes\functions.php');

footerab();

?>





