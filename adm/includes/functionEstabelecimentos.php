<?php

function top(){
?>
    <html>
    <head>
        <title>PHPJabbers.com | Free Travel Website Template</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">


        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Página de Estabelecimentos - Administração</h1>









                <br>



            </div>

        </div>


<?php
}
?>

<?php

function table(){
?>
<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$sql="select * from estabelecimentos";
$result=mysqli_query($con,$sql);

?>


   <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
    <a href="#" class="btn btn-primary pull-right h2">Novo estabelecimento</a>

   </div>






   <table class="table table-striped">";
      <thead>
        <tr>
            <th scope="col"></th>
          <th scope="col">ID</th>
          <th scope="col">Nome da Estabelecimento</th>
          <th scope="col">Morada</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>


          <th scope="col" class="actions">Ações</th>
        </tr>
      </thead>

      <tbody>

        <?php

        //dados na base de dados
        $sql="select * from estabelecimentos";
        $result=mysqli_query($con,$sql);

        while ($dados=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo " <td></td>";
            echo "<td>".$dados['estabelecimentoId']."</td>";
            echo "<td>".$dados['estabelecimentoNome']."</td>";
            echo "<td>".$dados['estabelecimentoMorada']."</td>";
            echo "<td>".$dados['estabelecimentoTelefone']."</td>";
            echo "<td>".$dados['estabelecimentoEmail']."</td>";





           echo "<td class= 'actions' >";

            echo  "<a class='btn btn-success btn-xs' href='listaslideshow.php'><i class='fa fa-eye'></i> Slideshow </a>";

                  echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"../adm/editaEstabelecimento.php?id=".$dados["estabelecimentoId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

                  echo  "  <a class='btn btn-danger btn-xs'  onclick=\"confirmaElimina(".$dados['estabelecimentoId'].");\"><i class='fa fa-trash'></i>Excluir</a>";
            echo "   </td>";
           echo "</tr>";
        }
    ?>
      </tbody>
    </table>
    <script>
        function confirmaElimina(id) {
            if(confirm('Confirma que deseja eliminar o registo?'))
                window.location="eliminaEstabelecimento.php?id=" + id;
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
                    echo "<form action=\"confirmaNovoEstabelecimento.php\" method=\"post\" enctype='multipart/form-data'>";


                       echo" <label>Nome: </label>";
                      echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";
                    echo" <label>Morada: </label>";
                    echo"  <input type=\"text\" name=\"moradaEstabelecimento1\"><br>";
                    echo" <label>Telefone: </label>";
                    echo"  <input type=\"text\" name=\"telefoneEstabelecimento1\"><br>";
                    echo" <label>Email: </label>";
                    echo"  <input type=\"text\" name=\"emailEstabelecimento1\"><br>";


                         ?>
                    <select name="categoriaEstabelecimento">
                        <option value="-1">Escolha a categoria...</option>
                        <?php
                        $sql="SELECT *
        from  categorias  order by categoriaNome";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>


                            <?php
                        }


                        ?>
                    </select>
                <hr>
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
}
        ?>

        <?php
        function footer(){
        ?>
        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    </ul>

                    &nbsp;
                </section>

                <ul class="copyright">
                    <li>Copyright © 2020 Company Name </li>
                    <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/main.js"></script>
    </body>
    </html>
<?php
}
?>
