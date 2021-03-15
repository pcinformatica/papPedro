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
            <a href="../../../../ANTIGOS/HTMLoriginal/index.html" class="logo">
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
            <li><a href="../../../../ANTIGOS/HTMLoriginal/index.html" >Home</a></li>

            <li><a href="../../../../ANTIGOS/HTMLoriginal/packages.html">Alojamento</a></li>

            <li><a href="../../../../ANTIGOS/HTMLoriginal/blog.html">Blog</a></li>

            <li><a href="menu/yamifood/pontosdecomida.html">Restauração</a></li>

            <li>
                <a href="#" class="dropdown-toggle">Descobrir</a>

                <ul>
                    <li><a href="../../../../ANTIGOS/HTMLoriginal/about.html">Sobre S. Pedro</a></li>
                    <li><a href="../../../../ANTIGOS/HTMLoriginal/testimonials.html" class="active">Avaliações</a></li>
                    <li><a href="../../../../ANTIGOS/HTMLoriginal/terms.html">Termos</a></li>
                </ul>
            </li>
            <li><a href="../../../../ANTIGOS/HTMLoriginal/contact.html">Contatos</a></li>
        </ul>
    </nav>

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
        $sql="select * from imagens inner join estabelecimentos on imagemEstabelecimentoId";
        $result=mysqli_query($con,$sql);

        ?>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
            <a href="#" class="btn btn-primary pull-right h2">Nova imagem</a>
        </div>





        <table class="table table-striped">";
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">Nome da Imagem</th>
                <th scope="col">ID Estabelecimento</th>
                <th scope="col">Ordem</th>



                <th scope="col" class="actions">Ações</th>
            </tr>
            </thead>

            <tbody>

            <?php

            //dados na base de dados


            while ($dados=mysqli_fetch_array($result)) {
                echo "<tr>";
                echo " <td></td>";
                echo "<td>".$dados['imagemId']."</td>";
                echo "<td><img src=\"../".$dados['imagemNome']."\"></td>";
                echo "<td>".$dados['imagemEstabelecimentoId']."</td>";
                echo "<td>".$dados['imagemOrdem']."</td>";





                echo "<td class= 'actions' >";


                echo  " <a class='btn btn-warning btn-xs  justify-content-md-end'href=\"editacategoria.php?id=".$dados["estabelecimentoId"]."\"><i class='fa fa-pencil'></i>Editar</a>";

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
                    window.location="../bootstrap-crud/eliminaEstabelecimento.php?id=" + id;
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



                        echo" <label>Ordem: </label>";
                        echo"  <input type=\"text\" name=\"ordemImagem\"><br>";


                        ?>
                        <label>Imagem:</label>
                        <input type="file" name="nomeImagem"><br>
                        <select name="imagemEstabelecimento">
                            <option value="-1">Escolha o estabelecimento...</option>
                            <?php
                            $sql="select * from estabelecimentos order by estabelecimentoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['estabelecimentoId']?>"><?php echo $dados['estabelecimentoNome']?></option>
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
