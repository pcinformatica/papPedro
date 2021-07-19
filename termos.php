<?php
include_once('includes\functions.php');
toptest();
Menutest();

?>
<?php
$con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
$con->set_charset("UTF-8");
$sql = "  SELECT * from termos inner  join pagTermos";


$resultCultural = mysqli_query($con, $sql);


?>




    <!-- Main -->
    <div id="main">
        <div class="inner">
            <?php
            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
            $sql = "  SELECT * from termos inner  join pagTermos";
            $con->set_charset("UTF-8");

            $resultCultural1 = mysqli_query($con, $sql);
            $dados1 = mysqli_fetch_array( $resultCultural1)

            ?>
            <h1><?php echo $dados1  ['pagtermoTitulo'] ?></h1>

            <div class="image main">
                <img  src="<?php echo $dados1 ['pagtermoURL'] ?>" class="img-fluid" alt=""/>

            </div>


            <!-- Main -->
            <div id="main">
                <div class="inner">


                    <?php
                    while ( $dados = mysqli_fetch_array( $resultCultural) )
                    {
                        ?>



                        <article class="style1">
                            <h2 class="m-n"><?php echo $dados['termoTitulo'] ?></h2>
                            <p><?php echo $dados['termoInfo'] ?> <br>
                            </p>

                        </article>

                        <?php
                    }?>




















        </div>
    </div>


<?php
include_once('includes\functions.php');

footerab();
?>

