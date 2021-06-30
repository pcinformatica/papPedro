<?php

header("content-type:text/html; charset=UTF-8");

include_once("config.inc.php");

$con = mysqli_connect("localhost", "root", "", "pap2021saopedro");

function drawTop($menu = MENUON, $opt=HOME, $id=-1)

{ ?>    <!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">




    <script>
        $('document').ready(function () {
            ;


            <?php
            if ($opt == BLOG){
            ?>
            $('#search').keyup(function () {
                fillTableBlog(this.value);
            });
            fillTableBlog();
            <?php
            }
            ?>

        })
    </script>


</head>
<body>    <?php if ($menu) { ?>

<section>

    <div class="row">

        <div class="col-12 mx-auto bg-dark text-center" style="min-height: 40px;">


            <a href="index.php"><button type="button" class="btn btn-outline-warning ">Requisições/Devoluções</button></a>

            <a href="tipos.php"><button type="button" class="btn btn-outline-warning ">Tipo de utilizadores</button></a>

            <a href="utilizadores.php"><button type="button" class="btn btn-outline-warning ">Utilizadores</button></a>

            <a href="autores.php"><button type="button" class="btn btn-outline-warning ">Autores</button></a>

            <a href="generos.php"><button type="button" class="btn btn-outline-warning ">Géneros</button></a>

            <a href="livros.php"><button type="button" class="btn btn-outline-warning ">Livros</button></a>


        </div>

    </div>

</section>

<?php

}

}

?>


