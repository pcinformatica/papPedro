<?php
include_once("includes/functionNoticias.php");
top();
?>


    <?php
    $con=mysqli_connect("localhost","root","","pap2021saopedro");
    $sql="select * from quartos";
    $result=mysqli_query($con,$sql);

    ?>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
        <a href="#" class="btn btn-primary pull-right h2">Novo Quarto</a>

    </div>






    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">Número Quarto</th>
            <th scope="col">Estabelecimento</th>
            <th scope="col">Tipo</th>
            <th scope="col">Disponiblidade</th>



            <th scope="col" class="actions">Ações</th>
        </tr>
        </thead>

        <tbody>

        <?php

        //dados na base de dados
        $sql="select * from quartos inner join  estabelecimentos on estabelecimentoId =  quartoEstabelecimentoId
inner join quartotipo on quartoTipoId = quartoQuartoTipoId
 ";
        $result=mysqli_query($con,$sql);

        while ($dados=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo " <td></td>";
            echo "<td>".$dados['quartoId']."</td>";
            echo "<td>".$dados['quartoNumero']."</td>";
            echo "<td>".$dados['estabelecimentoNome']."</td>";
            echo "<td>".$dados['quartoTipoTipo']."</td>";
            echo "<td>".$dados['quartoDisponiblidade']."</td>";






            echo "<td class= 'actions' >";


            echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"../adm/editaQuartos.php?id=".$dados["quartoId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

            echo  "  <a class='btn btn-danger btn-xs'  onclick=\"confirmaElimina(".$dados['quartoId'].");\"><i class='fa fa-trash'></i>Excluir</a>";
            echo "   </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <script>
        function confirmaElimina(id) {
            if(confirm('Confirma que deseja eliminar o registo?'))
                window.location="../adm/eliminaQuarto.php?id=" + id;
        }

    </script>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Quarto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo "<form action=\"../adm/confirmaNovoQuarto.php\" method=\"post\" enctype='multipart/form-data'>";



                    echo" <label>Número do Quarto: </label>";
                    echo"  <input type=\"text\" name=\"numeroQuarto\"><br>";




                    ?>


                    <select name="quartoEstabelecimento">
                        <option value="-1">Escolha o estabelecimento...</option>
                        <?php
                        $sql="SELECT *
        from estabelecimentos order by estabelecimentoNome";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['estabelecimentoId']?>"><?php echo $dados['estabelecimentoNome']?></option>


                            <?php
                        }


                        ?>
                    </select>
<br>


                    <select name="quartoTipo">
                        <option value="-1">Escolha o tipo de quarto...</option>
                        <?php
                        $sql="SELECT *
        from  quartotipo  order by quartoTipoTipo";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['quartoTipoId']?>"><?php echo $dados['quartoTipoTipo']?></option>


                            <?php
                        }


                        ?>
                    </select>
<br>
                    <select name="quartoPreco">
                        <option value="-1">Escolha o preco..</option>
                        <?php
                        $sql="SELECT *
        from  precos  order by precoNormal";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['precoId']?>"><?php echo $dados['precoNormal']?></option>


                            <?php
                        }


                        ?>
                    </select>




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
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <?php
        $id=intval($_GET['id']);
        $con=mysqli_connect("localhost","root","","pap2021saopedro");
        $sql="select * from categorias where categoriaId=".$id;
        $result=mysqli_query($con,$sql);
        $dados=mysqli_fetch_array($result);

        ?>






        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edita Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="confirmaEditaEstabelecimento.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?php echo $id?>">

                        <label>Nome:</label>
                        <input type="text" name="nomeCategoria" value="<?php echo $dados['categoriaNome']?>">
                    </form>
                </div>
                <div class="modal-footer">
                    <?php
                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                    echo" <button type=\"submit\" class='btn btn-primary'>Save changes</button> ";
                    ?>

                </div>
            </div>
        </div>
    </div>




<?php
footer();?>