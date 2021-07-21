<?php
include_once('includes\functions.php');
toppackrest();
Menupackrest();
?>

<!-- Main -->
<div id="main">
    <div class="inner">
        <h1>Restauração</h1>

        <div class="image main">
            <img src="images/rest1a.jpg" class="img-fluid" alt=""/>
        </div>

        <?php
        include_once("config.inc.php");
        $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
        $con->set_charset("utf8");
        $sql = "SELECT * 
from  estabelecimentos 
inner join categorias on estabelecimentoCategoriaId = categoriaId
where categoriaNome='Restauracao' " ;

        $resultado = mysqli_query($con, $sql);


        ?>
        <section class="tiles">
            <?php
            while ($dados = mysqli_fetch_array($resultado)) {
                ?>


                <article class="style1">
                                                <span class="image">
                                                    <img src="<?php echo $dados ['estabelecimentoURL'] ?>" alt=""/>
                                                </span>
                    <a href="alojamentoInfo.php?id=<?php echo $dados  ['estabelecimentoId'] ?>">
                        <h2><?php echo $dados  ['estabelecimentoNome'] ?></h2>

                        <p><strong>€<?php echo $dados  ['estabelecimentoPrecoMin'] ?> - €<?php echo $dados  ['estabelecimentoPrecoMax'] ?></strong></p>

                        <p>
                            <small>
                                <?php

                                echo $dados['estabelecimentoInfoCatog'];
                                ?>
                            </small>
                        </p>
                    </a>
                </article>
                <?php
            }?>
        </section>
        <?php
        include_once('includes\functions.php');
        footerpackrest();
        ?>


