<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);

$sql="select * from pagtermos where pagtermoId=".$id;
$resultEstabelecimentos=mysqli_query($con,$sql);
$dadosEstabelecimentos=mysqli_fetch_array($resultEstabelecimentos);
?>
<!DOCTYPE HTML>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <section class="store" style="padding:50px">



        <a href="termopagina.php"><button type="button" class="btn btn-danger">Voltar</button></a>
        <hr>
        <form action="confirmaEditaPagTermo.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

            <label style="color:black; font-size: 15px" class="badge badge-white">Nome da página: </label>
            <input type="text"  class="col-2 col-form-label  " name="noticiaNome" value="<?php echo $dadosEstabelecimentos["pagtermoTitulo"]?>">
            <label  style="color:black; font-size: 15px" class="badge badge-white col-2" > </label>


            <hr>





            <hr>




            <hr>
            <script>
                function preview_image(event) {
                    var reader = new FileReader();
                    reader.onload = function () {
                        var output = document.getElementById('output_image');
                        output.src = reader.result;
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script>
            <div class="container">
                <h2 align="center" style="margin-top: 10%">

                    <input type="hidden" name="imagemId" value="<?php echo $id ?>">

                    <label>Imagem Inicial:</label><br>
                    <img width="400" id="output_image" src="../<?php echo $dadosEstabelecimentos['pagtermoURL']?>"><br>
                    <input type="file" name="nomeImagem"><br>


            </div>


            <hr>



            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>











        </form>
    </section>
