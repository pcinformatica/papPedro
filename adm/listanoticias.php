<?php
include_once("includes/functionNoticias.php");
include_once("includes/functionMenuGeral.php");

topNot();
top();
?>


    <?php
    $con=mysqli_connect("localhost","root","","pap2021saopedro");
    $sql="select * from noticias";
    $result=mysqli_query($con,$sql);

    ?>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
        <a href="#" class="btn btn-primary pull-right h2">Nova notícia</a>

    </div>






    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">Nome da Notícias</th>
            <th scope="col">Data</th>
            <th scope="col">Hora</th>



            <th scope="col" class="actions">Ações</th>
        </tr>
        </thead>

        <tbody>

        <?php

        //dados na base de dados
        $sql="select * from noticias";
        $result=mysqli_query($con,$sql);

        while ($dados=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo " <td></td>";
            echo "<td>".$dados['noticiaId']."</td>";
            echo "<td>".$dados['noticiaTitulo']."</td>";
            echo "<td>".$dados['noticiaData']."</td>";
            echo "<td>".$dados['noticiasH']."</td>";






            echo "<td class= 'actions' >";

            echo  " <a class='btn btn-success btn-xs  justify-content-md-end'href=\"../adm/editaNoticiaImagem.php?id=".$dados["noticiaId"]."\"><i class='fa fa-pencil'></i>Imagem Fundo</a>";

            echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"../adm/editaNoticias.php?id=".$dados["noticiaId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

            echo  "  <a class='btn btn-danger btn-xs'  onclick=\"confirmaElimina(".$dados['noticiaId'].");\"><i class='fa fa-trash'></i>Excluir</a>";
            echo "   </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <script>
        function confirmaElimina(id) {
            if(confirm('Confirma que deseja eliminar o registo?'))
                window.location="../adm/eliminaNoticia.php?id=" + id;
        }

    </script>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova Notícia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo "<form action=\"../adm/confirmaNovaNoticia.php\" method=\"post\" enctype='multipart/form-data'>";



                    echo" <label>Nome: </label>";
                    echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";




                    ?>








                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Data</label>
                        <div class="col-10">
                            <input class="form-control" type="date"  name="Data" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Hora</label>
                        <div class="col-10">
                            <input class="form-control" type="time" name="Hora" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
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