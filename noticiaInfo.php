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




<?php
include_once('includes\functions.php');

footerpost();
?>