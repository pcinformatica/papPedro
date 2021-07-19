<?php
include_once("includes/functionCategorias.php");
include_once("includes/functionMenuGeral.php");
topCategorias();
top();
?>


    <?php
    $con=mysqli_connect("localhost","root","","pap2021saopedro");
    $sql="select * from categorias";
    $result=mysqli_query($con,$sql);


    ?>



    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="">
        <?php
        $dados=mysqli_fetch_array($result);
        echo  "  <a href='#' class='btn btn-danger pull-right '  onclick=\"confirmaEliminaDestaque(".$dados['categoriaId'].");\"><i class=' btn-danger pull-right'></i> Elimina Destaque</a>" ;
        ?>


        <script>
            function confirmaEliminaDestaque(id) {
                if(confirm('Confirma que deseja eliminar todo o destaque?'))
                    window.location="editaEliminaDestaque.php?id=" + id;
            }

        </script>
        <br>
    </div>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">

        <a  href="#" class="btn btn-primary pull-right h2">Nova Categoria</a>
    </div>





    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">Nome da Categoria</th>

            <th scope="col" class="actions">Ações</th>
        </tr>
        </thead>

        <tbody>

        <?php

        //dados na base de dados
        $sql="select * from categorias";
        $result=mysqli_query($con,$sql);

        while ($dados=mysqli_fetch_array($result)) {
        echo "<tr>";
        echo " <td></td>";
        echo "<td>".$dados['categoriaId']."</td>";
        echo "<td>".$dados['categoriaNome']."</td>";



        echo "<td class= 'actions' >";
        echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"../adm/editaCategoria.php?id=".$dados["categoriaId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

        echo  "  <a class='btn btn-danger btn-xs'  onclick=\"confirmaElimina(".$dados['categoriaId'].");\"><i class='fa fa-trash'></i>Excluir</a>";

        ?>

        <a href="editaDestaque.php?id=<?php echo $dados['categoriaId']?>">
            <?php  if($dados['categoriaDestaque'] == "sim"){?>
                <i class=" fa fa-star text-warning"></i>
                <?php
            } else {
                ?>
                <i class=" fa fa-star-o text-warning"></i>
                <?php
            }
            ?>


            <?php




            echo "   </td>";
            echo "</tr>";


            }
            ?>


        </tbody>
    </table>

    <script>
        function confirmaElimina(id) {
            if(confirm('Confirma que deseja eliminar o registo?'))
                window.location="../adm/eliminaCategoria.php?id=" + id;
        }

    </script>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo "<form action=\"../adm/confirmaNovaCategoria.php\" method=\"post\" enctype='multipart/form-data'>";


                    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";
                    ?>
                </div>
                <div class="modal-footer">
                    <?php
                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                    echo" <button type=\"Submit\" class='btn btn-primary'>Save changes</button> ";
                    ?>

                </div>
            </div>
        </div>
    </div>



<?php
footer();
?>