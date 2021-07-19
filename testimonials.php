<?php

include_once('includes\functions.php');
topLen();
MenuLen();
?>


    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>Testemunhos</h1>

            <div class="image main">
                <img src="images/banner-image-3-1920x500.jpg" class="img-fluid" alt=""/>
            </div>

            <div class="row">
                <?php
                $sql="select comentarioTexto, perfilNome from comentarios inner join perfis on perfilId=comentarioPerfilId";
                $result=mysqli_query($con,$sql);
                while($dados=mysqli_fetch_array($result)){
                ?>
                <div class="col-sm-6 text-center">
                    <p class="m-n"><em><?php echo $dados['comentarioTexto']?></em></p>

                    <p><strong> - <?php echo $dados['perfilNome']?></strong></p>
                </div>
                    <?php
                }
                    ?>

            </div>


        </div>
    </div>




<?php

include_once('includes\functions.php');
footerab();
?>