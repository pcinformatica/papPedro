<?php
include_once("includes/functionCategorias.php");
include_once("includes/functionMenuGeral.php");
topTermo();

?>
    <div id="main">
        <div class="inner">
            <h1>Página dos Termos - Administração</h1>








            <br>



        </div>

    </div>

    <?php
    $con=mysqli_connect("localhost","root","","pap2021saopedro");
    $sql="select * from pagtermos";
    $result=mysqli_query($con,$sql);
$con->set_charset("utf-8");
    ?>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
        <a href="#" class="btn btn-primary pull-right h2">Nova página</a>

    </div>






    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">Nome do titulo</th>
            <th scope="col">Informacao</th>



            <th scope="col" class="actions">Ações</th>
        </tr>
        </thead>

        <tbody>

        <?php

        //dados na base de dados
        $con=mysqli_connect("localhost","root","","pap2021saopedro");
        $con->set_charset("utf-8");
        $sql="select * from termos inner join pagtermos ";
        $result=mysqli_query($con,$sql);

        while ($dados=mysqli_fetch_array($result)) {

            echo "<tr>";
            echo " <td></td>";
            echo "<td>".$dados['termoId']."</td>";
            echo "<td>".$dados['termoTitulo']."</td>";
            echo "<td>".$dados['pagtermoTitulo']."</td>";?>

            <?php






            echo "<td class= 'actions' >";


            echo  " <a class='btn btn-success btn-xs justify-content-md-end'href=\"../adm/termopagina.php?id=".$dados["termoId"]."\"><i class='fa  fa-eye'></i>Termos(página)</a>";
            echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"../adm/editaTermo.php?id=".$dados["termoId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

            echo  "  <a class='btn btn-danger btn-xs'  onclick=\"confirmaElimina(".$dados['pagtermoId'].");\"><i class='fa fa-trash'></i>Excluir</a>";
            echo "   </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <script>
        function confirmaElimina(id) {
            if(confirm('Confirma que deseja eliminar o registo?'))
                window.location="../adm/eliminaTermo.php?id=" + id;
        }

    </script>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Termo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo "<form action=\"confirmaNovoTermo.php\" method=\"post\" enctype='multipart/form-data'>";



                    echo" <label>Nome do Título: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria5\"><br>";



                    ?>
                    <select name="Termopag">
                        <option value="-1">Escolha a pagTermo...</option>
                        <?php
                        $sql="SELECT *
        from  pagtermos order by pagtermoTitulo";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['pagtermoId']?>"><?php echo $dados['pagtermoTitulo']?></option>


                            <?php
                        }


                        ?>
                    </select>

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
footer();?>