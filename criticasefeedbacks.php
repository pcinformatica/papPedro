<?php

include_once('includes\functions.php');
topLen();
MenuLen();
/*
session_start();
*/
?>


    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>Avaliações</h1>

            <div class="image main">
                <img src="images/banner-image-3-1920x500.jpg" class="img-fluid" alt=""/>
            </div>

            <div class="row">
                <?php
                $sql="select criticasTexto, perfilNome from criticas inner join perfis on perfilId=criticaPerfilId";
                $result=mysqli_query($con,$sql);
                while($dados=mysqli_fetch_array($result)){
                ?>
                <div class="col-sm-6 text-center">
                    <p class="m-n"><em><?php echo $dados['criticasTexto']?></em></p>

                    <p><strong> - <?php echo $dados['perfilNome']?></strong></p>
                </div>
                    <?php
                }

                if(isset($_SESSION['id'])){
                ?>
            </div>
            <section>

                <h2>Deixe aqui a sua crítica</h2>

                <form method="post" action="novaCritica.php">

                    <div class="fields">



                        <div class="field">

                            <textarea name="critica"></textarea>

                        </div>


                        <div class="field text-right">

                            <label>&nbsp;</label>



                            <ul class="actions" style="width: 290px; height: 70px">

                                <li><input type="submit" value="Enviar crítica" class="primary" style="height: 80px; text-align: center;" /></li>
                            </ul>

                        </div>

                    </div>

                </form>

            </section>
            <?php
            }
            ?>
        </div>
    </div>

            </div>


        </div>
    </div>




<?php

include_once('includes\functions.php');
footerab();
?>