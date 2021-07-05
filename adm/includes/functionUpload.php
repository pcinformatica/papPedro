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
                <h1>SlideShow(Pág. Principal) - Administração</h1>








                <br>



            </div>

        </div>


<?php
}
?>

<?php

function table(){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Upload de Arquivos</title>

        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    </head>

    <body>

    <div class="container-fluid mt-3">


        <h2>UPLOAD DE ARQUIVOS</h2>
        <div class="card">
            <div class="card-body">

                <form action="envia.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="arquivo">
                    <input type="submit" name="Enviar">


                </form>

            </div>

        </div>



        <h6 class="mt-3">ARQUIVOS ENVIADOS</h6>
        <?php  require 'lista.php'?>
    </div>







    </body>






    </html>
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
