<?php

function footer(){
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

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="../index.html" class="logo">
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
                <li><a href="../index.html" >Home</a></li>

                <li><a href="../packages.html">Alojamento</a></li>

                <li><a href="../blog.html">Blog</a></li>

                <li><a href="menu/yamifood/pontosdecomida.html">Restauração</a></li>

                <li>
                    <a href="#" class="dropdown-toggle">Descobrir</a>

                    <ul>
                        <li><a href="../about.html">Sobre S. Pedro</a></li>
                        <li><a href="../testimonials.html" class="active">Avaliações</a></li>
                        <li><a href="../terms.html">Termos</a></li>
                    </ul>
                </li>
                <li><a href="../contact.html">Contatos</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Página de Alojamento</h1>


                <div id="top" class="row">
                    <div class="col-md-3">
                        <h2></h2>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group h2">
                            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                            <span class="input-group-btn">

            </span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <a href="add.html" class="btn btn-primary pull-right h2">Novo publicacção</a>
                    </div>
                </div> <!-- /#top -->














                <div class="table-responsive">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do alojamento</th>
                            <th>Header 2</th>
                            <th>Data</th>
                            <th class="actions">Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1001</td>
                            <td>Casa para Aluguel</td>
                            <td>Jes</td>
                            <td>01/01/2015</td>
                            <td class="actions">
                                <a class="btn btn-success btn-xs" href="view.html"><i class="fa fa-eye"></i> Visualizar</a>
                                <a class="btn btn-warning btn-xs" href="edit.html"><i class="fa fa-pencil"></i> Editar</a>
                                <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i> Excluir</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>






                </div>
                <div id="bottom" class="row">
                    <div class="col-md-12">

                        <ul class="pagination">
                            <li class="disabled"><a>&lt; Anterior</a></li>
                            <li class="disabled"><a>1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
                        </ul><!-- /.pagination -->

                    </div>
                </div> <!-- /#bottom -->
                <br>



            </div>

        </div>
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