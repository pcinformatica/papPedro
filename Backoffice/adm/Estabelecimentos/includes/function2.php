<?php

function top(){
?>
    <html>
    <head>
        <title>PHPJabbers.com | Free Travel Website Template</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../../../../Frontoffice/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../../../Frontoffice/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../../../../Frontoffice/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="../../ANTIGOS/HTMLoriginal/index.html" class="logo">
                    <span class="fa fa-anchor"></span> <span class="title">São Pedro de Moel </span>
                </a>

                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>

            <ul>
                <li><a href="../../../../Frontoffice/index.html" >Categorias</a></li>
                <li>
                    <a href="#" class="dropdown-toggle">Estabelecimentos</a>

                    <ul>
                        <li><a href="../lista/indexestabelecimentos.php" >Estabelecimentos</a></li>
                        <li><a href="../lista/indexestabelecimentos2.php" class="active">Estabelecimentos - 2</a></li>
                        <li><a href="../lista/indexslideshow.php">SlideShow</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Página de Estabelecimento 2 - Administração</h1>








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



    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="">
        <a href="../lista/indexestabelecimentos.php" class="btn btn-primary pull-right h2">Voltar  </a>

    </div>




   <table class="table table-striped">";
      <thead>
        <tr>
            <th scope="col"></th>
          <th scope="col">ID</th>
          <th scope="col">Nome da Estabelecimento</th>
          <th scope="col">Descrição</th>
          <th scope="col">Latitude</th>
          <th scope="col">Longitude</th>


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
            echo "<td>".$dados['estabelecimentoDescricao']."</td>";
            echo "<td>".$dados['estabelecimentoLatitude']."</td>";
            echo "<td>".$dados['estabelecimentoLongitude']."</td>";





           echo "<td class= 'actions' >";

            echo "<a class='btn btn-success btn-xs' href='../lista/indexslideshow.php'><i class='fa fa-eye'></i> SlideShow </a>";

                  echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"../edita/edita3.php?id=".$dados["estabelecimentoId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

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
                window.location="../elimina/eliminaEstabelecimento2.php?id=" + id;
        }

    </script>

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
    <script src="../../../../Frontoffice/assets/js/jquery.min.js"></script>
    <script src="../../../../Frontoffice/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../Frontoffice/assets/js/jquery.scrolly.min.js"></script>
    <script src="../../../../Frontoffice/assets/js/jquery.scrollex.min.js"></script>
    <script src="../../../../Frontoffice/assets/js/main.js"></script>
    </body>
    </html>
<?php
}
?>
