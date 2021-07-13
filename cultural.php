<?php
include_once('includes\functions.php');
topped();
Menuped();
?>



    <?php
    $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
    $id = intval($_GET["id"]);
    $sql = "  SELECT * from  cultural   inner  join lendas on lendaCulturalId = culturalId where culturalId=".$id;


    $resultCultural = mysqli_query($con, $sql);


    ?>

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <?php
            if( $resultCultural = mysqli_query($con, $sql)){
                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                $id = intval($_GET["id"]);
                $sql = "  SELECT * from  cultural   inner  join lendas on lendaCulturalId = culturalId where culturalId=".$id;


                $resultCultural1 = mysqli_query($con, $sql);
                $dadosCultural1 = mysqli_fetch_array( $resultCultural1);

                ?>
                <h1><?php echo $dadosCultural1["culturalNome"] ?> </h1>

                <div class="image main">
                    <img  src="<?php echo $dadosCultural1 ['culturalURL'] ?>" class="img-fluid" alt=""/>
                </div>
                <?php
            }
            ?>



            <?php
            while(  $dadosCultural2 = mysqli_fetch_array( $resultCultural)){


                ?>

                <h2 class="m-n"><?php echo $dadosCultural2 ['lendaDescricaoTitu'] ?></h2>
                <p><?php echo $dadosCultural2 ['lendaDescricao'] ?> <br>
                </p>




                <?php
            }
            ?>

            <?php
            if( $resultCultural = mysqli_query($con, $sql) ){
            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
            $id = intval($_GET["id"]);
            $sql = "  SELECT * from  cultural   inner  join caracteristicas on caracteristicaCulturalId = culturalId where culturalId=".$id;


            $resultCultural1 = mysqli_query($con, $sql);
            $dadosCultural3 = mysqli_fetch_array( $resultCultural1);

            ?>
        <?php
        if( $dadosCultural3 ){


        ?>
            <h2 class="m-n">Características do Percurso</h2>
            <p><b>Nome</b> <?php echo $dadosCultural3["caracteristicaNome"] ?> <br>
                <b>Código</b> <?php echo $dadosCultural3["caracteristicaCodigo"] ?><br>
                <b>Tipologia</b> <?php echo $dadosCultural3["caracteristicaTipologia"] ?><br>
                <b>Distância</b> <?php echo $dadosCultural3["caracteristicaDistancia"] ?><br>
                <b>Duração aproximada</b><?php echo $dadosCultural3["caracteristicaDuracaoAproximada"] ?>h<br>
                <b>Tipo de piso</b> <?php echo $dadosCultural3["caracteristicaTipoPiso"] ?><br>
                <b>Grau de dificuldade</b> <?php echo $dadosCultural3["caracteristicaGrauDificuldade"] ?><br>
                <b>Local de Partida </b> <?php echo $dadosCultural3["caracteristicaLocalPartida"] ?><br>
                <b>Local de Chegada </b> <?php echo $dadosCultural3["caracteristicaLocalChegada"] ?><br>
                <b>Coordenadas geográficas </b><?php echo $dadosCultural3["caracteristicaCoordenadaGeograficas"] ?> <br>


                <?php
                }
                ?>



                <?php
                }
                ?>


                <?php
                if( $resultCultural = mysqli_query($con, $sql) ){
                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                $id = intval($_GET["id"]);
                $sql = "  SELECT * from  cultural   inner  join Ficheiros on ficheiroCulturalId = culturalId where culturalId=".$id;


                $resultCultural6 = mysqli_query($con, $sql);


                ?>
                <?php
                if( $resultCultural6  ) {
                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                $id = intval($_GET["id"]);
                $sql = "  SELECT * from  cultural   inner  join Ficheiros on ficheiroCulturalId = culturalId where culturalId=".$id;


                $resultCultural9 = mysqli_query($con, $sql);
                $dadosCultural8 = mysqli_fetch_array( $resultCultural9)
                ?>
                <?php
                if( $dadosCultural8  ) {
                ?>
            <h2 class="m-n">Ficheiros</h2>
        <?php
        }
        ?>
        <?php
        }
        ?>
        <?php
        while(  $dadosCultural7 = mysqli_fetch_array( $resultCultural6)){


            ?>



            <img src="../../../a_logotipos/logo_icon_pdf_14_14.gif" width="16" height="16">
            <a href="<?php echo $dadosCultural7 ['ficheiroURL'] ?>"
               target="_blank"><?php echo $dadosCultural7 ['ficheiroNome'] ?></a><br>



            <?php
        }
        ?>



        <?php
        }
        ?>


        </div>
    </div>





<?php
include_once('includes\functions.php');

footerab();
?>