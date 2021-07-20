<?php
include_once("includes/body.inc.php");
include_once("includes/functions.php");
topind();
?>

    <div id="main" class="alt">

        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <?php if(isset($_SESSION['id'])){ ?>

                        <h1> Conta - <?php echo  $_SESSION['nome']?></h1>
                        <a href="index.php"
                        <button type="button" class="btn btn-light">Voltar</button></a>
                    <?php }else{ ?>

                        <h1> Conta </h1>
                    <?php }?>
                </header>




        </section>

    </div>

<?php
footerind();
?>