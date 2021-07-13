


<?php
include_once('includes\functions.php');
topint();
Menuint();

?>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>Página Cultural</h1>






            <div class="image main">
                <img src="images/banner-image-7-1920x500.jpg" class="img-fluid" alt=""/>
            </div>
            <?php
            include_once("config.inc.php");
            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
            $con->set_charset("utf8");
            $sql = "SELECT * from  setores 
inner join categorias on setorCategoriaId = categoriaId
";
            $resultado = mysqli_query($con, $sql);


            ?>
            <section class="tiles">
                <?php
                while ($dados = mysqli_fetch_array($resultado)) {
                    ?>


                    <article class="style1">
                                                <span class="image">
                                                    <img src="<?php echo $dados ['setorURL'] ?>" alt=""/>
                                                </span>
                        <a href="cultural.php?id=<?php echo $dados  ['setorId'] ?>">
                            <h2><?php echo $dados  ['setorNome'] ?></h2>



                        </a>
                    </article>
                    <?php
                } ?>

        </div>
    </div>



<?php
include_once('includes\functions.php');

footerab();
?>
