


<?php
include_once('includes\functions.php');
topab();
Menuab();
?>
<?php
include_once("config.inc.php");
$con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
$con->set_charset("utf8");
$sql = "SELECT * from saopedro
";
$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($resultado);

?>
    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1><?php echo $dados  ['saopedroTitulo'] ?></h1>






            <div class="image main">
                <img src="<?php echo $dados ['saopedroURL'] ?>"  class="img-fluid" alt=""/>

            </div>



                <p> <?php echo $dados  ['saopedroDescricao'] ?></p>


        </div>
    </div>



<?php
footerab();
?>
