<?php
include_once("includes/functionNoticias.php");
include_once("includes/functionMenuGeral.php");

topPrec();

?>

    <div id="main">
        <div class="inner">
            <h1>Página Preços - Administração</h1>








            <br>



        </div>

    </div>


<?php
    $con=mysqli_connect("localhost","root","","pap2021saopedro");
    $sql="select * from precos";
    $result=mysqli_query($con,$sql);


    ?>




    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">

        <a  href="#" class="btn btn-primary pull-right h2">Novo preco</a>
    </div>





    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">Preco Normal</th>
            <th scope="col">Desconto</th>

            <th scope="col" class="actions">Ações</th>
        </tr>
        </thead>

        <tbody>

        <?php

        //dados na base de dados
        $sql="select * from precos ";
        $result=mysqli_query($con,$sql);

        while ($dados=mysqli_fetch_array($result)) {
        echo "<tr>";
        echo " <td></td>";
        echo "<td>".$dados['precoId']."</td>";
        echo "<td>".$dados['precoNormal']."€</td>";

          echo "<td>" . $dados['precoDesconto'] . "%</td>";


        echo "<td class= 'actions' >";
        echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"../adm/editaPreco.php?id=".$dados["precoId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

        echo  "  <a class='btn btn-danger btn-xs'  onclick=\"confirmaElimina(".$dados['precoId'].");\"><i class='fa fa-trash'></i>Excluir</a>";

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
                window.location="../adm/eliminaPreco.php?id=" + id;
        }

    </script>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Quarto Tipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo "<form action=\"../adm/confirmaNovoPreco.php\" method=\"post\" enctype='multipart/form-data'>";


                    echo" <label>Preco: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";
                    ?>
                </div>
                <div class="modal-footer">
                    <?php
                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
                    echo" <button type=\"Submit\" class='btn btn-primary'>Salvar</button> ";
                    ?>

                </div>
            </div>
        </div>
    </div>



<?php
footer();
?>