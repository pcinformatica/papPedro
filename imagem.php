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

    <center><img src="1a.jpg" width="200" </center>
    <p>PROGRAMADOR PC</p>

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