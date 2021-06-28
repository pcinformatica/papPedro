<?php

include_once("config.inc.php");
$con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
$con->set_charset("utf8");
function topab(){
?>
    <!DOCTYPE HTML>
<html>
<head>
    <title>PHPJabbers.com | Free Travel Website Template</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>


<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="index.php" class="logo">
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

    <?php
    }
    ?>


    <?php

    function Menuab()
    {
        ?>
        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.php">Home</a></li>

                <li><a href="packages.php">Alojamento</a></li>

                <li><a href="blog.php">Blog</a></li>

                <li><a href="packagesrestaurant.php">Restauração</a></li>


                <li>
                    <a href="#" class="dropdown-toggle">Descobrir</a>

                    <ul>
                        <li><a href="about.php" class="active">Sobre S. Pedro</a></li>
                        <li><a href="testimonials.php">Avaliações</a></li>
                        <li><a href="terms.php">Termos</a></li>
                        <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contatos</a></li>
            </ul>
        </nav>

        <?php
    }

    ?>

    <?php

    function bodab()
    {
        ?>
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>São Pedro de Moel, uma das aldeias mais lindas do litoral português</h1>

                <div class="image main">
                    <img src="images/verdois.webp" class="img-fluid" alt=""/>
                </div>

                <p> Localizada no Centro de Portugal e a 19 km da turística Nazaré, São Pedro de Moel é uma aldeia de
                    389 habitantes cercada pelo Pinhal de Leiria e pelo Oceano Atlântico.</p>
                <p>É uma das mais pitorescas praias da costa portuguesa, abrigada numa concha de casario e com excelente
                    localização numa aberta do Pinhal de Leiria, um pouco ao sul da foz da ribeira de Moel. A praia
                    pequena, limitada pelo norte por rochas abruptas, e ao sul por um pequeno ribeiro. Não tem boas
                    condições para a prática de desportos náuticos, pois o mar é geralmente agitado. Praticam-se outros
                    desportos como o voleibol de praia e o ténis. Corre-se e passeia-se de bicicleta ao longo da "Volta
                    dos Cinco". Junto ao farol pratica-se a pesca desportiva e a submarina, já que a Norte da praia de
                    São Pedro existem rochedos mariscados que atraem diversas espécies de peixes, tais como sargo,
                    robalo, safio e dourada que, a par dos mariscos, são habituais à mesa dos restaurantes de São Pedro
                    de Moel. Os hotéis e a magnífica piscina oceânica sobre a praia são pontos de referência turística.
                    Ao entardecer as esplanadas e um admirável pôr-do-sol anunciam o ambiente elegante, cosmopolita e
                    animado das noites de S. Pedro de Moel.</p>

            </div>
        </div>
        <?php
    }

    ?>

    <?php

    function footerab(){
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
                <li>Copyright © 2020 Company Name</li>
                <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
<?php
}
?>



<?php

function topLen(){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PHPJabbers.com | Free Travel Website Template</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="index.php" class="logo">
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

    <?php
    }
    ?>

    <?php
    function MenuLen()
    {
        ?>
        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>

            <ul>
                <li><a href="index.php">Home</a></li>

                <li><a href="packages.php">Alojamento</a></li>

                <li><a href="blog.php">Blog</a></li>

                <li><a href="packagesrestaurant.php">Restauração</a></li>


                <li>
                    <a href="#" class="dropdown-toggle">Descobrir</a>

                    <ul>
                        <li><a href="about.php">Sobre S. Pedro</a></li>
                        <li><a href="testimonials.php" class="active">Avaliações</a></li>
                        <li><a href="terms.php">Termos</a></li>
                        <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contatos</a></li>
            </ul>
        </nav>


        <?php
    }

    ?>

    <?php

    function bodyLen()
    {
        ?>
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Lendas</h1>

                <div class="image main">
                    <img src="images/banner-image-3-1920x500.jpg" class="img-fluid" alt=""/>
                </div>

                <h2 class="m-n">A plantação do Pinhal</h2>
                <p> Regressando do Golfo da Gasconha, um grupo de marinheiros portugueses trouxe consigo lenha e pinhas
                    daquela região. Chegando a Portugal, e intrigados com os pinhões minúsculos que as ditas pinhas
                    apresentavam, mostraram-nas à rainha. Santa Isabel, transportando o penisco no seu regaço, foi até
                    uma clareira junto a São Pedro de Moel e ali lançou as pequenas sementes à areia. Passados meses, as
                    pequenas árvores começaram a brotar. Entusiasmada com o resultado, Isabel mostrou ao rei o resultado
                    do seu trabalho. Dom Dinis, compreendendo o potencial daquelas árvores que cresciam nas dunas,
                    mandou aos marinheiros que trouxessem mais daquelas sementes nas próximas viagens. E, assim, estava
                    dado o primeiro passo para a plantação do Pinhal do Rei.</p>
                <h2 class="m-n">As camarinhas</h2>
                <p> Apesar de bom rei, Dom Dinis sempre teve fama de infiel (não seria só fama, a julgar pelos seus
                    bastardos reconhecidos). Na corte, onde os mexericos abundavam, chegou aos ouvidos de Isabel mais um
                    caso amoroso do seu esposo. Dominada pelos ciúmes, pôs-se a rainha a cavalo na tentativa de apanhar
                    os amantes. Chegando a um rochedo, entre o Pinhal e o mar, lá os encontrou. Destroçada,
                    encheram-se-lhe os olhos de lágrimas. E tanto chorou que toda a vegetação em seu redor ficou coberta
                    por pequenas gotas. Assim, no final do verão, os arbustos cobrem-se com estas pequenas bagas
                    brancas, agridoces, em memória das lágrimas da Santa Rainha.</p>
                <h2 class="m-n">Fonte da Felícia</h2>
                <p>Quando o príncipe Afonso, depois de se refrescar com as águas de uma fonte no interior do Pinhal,
                    perguntou à sua mãe, a Rainha Santa Isabel, o nome do local, ela terá respondido, “É a fonte da
                    Felícia, meu príncipe!”. Talvez pela felicidade que lhe transmitiu o local, naquele momento de paz e
                    serenidade?</p>


            </div>
        </div>


        <?php
    }

    ?>


    <?php

    function toptest(){
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>PHPJabbers.com | Free Travel Website Template</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/main.css"/>
        <noscript>
            <link rel="stylesheet" href="assets/css/noscript.css"/>
        </noscript>
    </head>
    <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index.php" class="logo">
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

        <?php
        }
        ?>

        <?php

        function Menutest()
        {
            ?>
            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>

                <ul>
                    <li><a href="index.php">Home</a></li>

                    <li><a href="packages.php">Alojamento</a></li>

                    <li><a href="blog.php">Blog</a></li>

                    <li><a href="packagesrestaurant.php">Restauração</a></li>


                    <li>
                        <a href="#" class="dropdown-toggle">Descobrir</a>

                        <ul>
                            <li><a href="about.php">Sobre S. Pedro</a></li>
                            <li><a href="testimonials.php">Avaliações</a></li>
                            <li><a href="terms.php">Termos</a></li>
                            <li><a href="pontosdeinteresse.php" class="active">Pontos de Interesse</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contatos</a></li>
                </ul>
            </nav>

            <?php
        }

        ?>
        <?php

        function bodytest()
        {
            ?>
            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>Testemunhos</h1>

                    <div class="image main">
                        <img src="images/banner-image-3-1920x500.jpg" class="img-fluid" alt=""/>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <p class="m-n"><em>"Muito bonita e acolhedora. E numa manhã de Setembro, cheia de nevoeiro,
                                    fica ainda mais bonita, e misteriosa."</em></p>

                            <p><strong> - John Doe</strong></p>
                        </div>

                        <div class="col-sm-6 text-center">
                            <p class="m-n"><em>"E um lugar onde se admira a natureza e lugar pra refletir."</em></p>

                            <p><strong>- Ana Luíza</strong></p>
                        </div>
                    </div>


                </div>
            </div>


            <?php
        }

        ?>
        <?php

        function topterm(){
        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <title>PHPJabbers.com | Free Travel Website Template</title>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
            <link rel="stylesheet" href="assets/css/main.css"/>
            <noscript>
                <link rel="stylesheet" href="assets/css/noscript.css"/>
            </noscript>
        </head>
        <body class="is-preload">
        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <div class="inner">

                    <!-- Logo -->
                    <a href="index.php" class="logo">
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

            <?php
            }
            ?>
            <?php

            function Menuterm()
            {
                ?>
                <!-- Menu -->
                <nav id="menu">
                    <h2>Menu</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>

                        <li><a href="packages.php">Alojamento</a></li>

                        <li><a href="blog.php">Blog</a></li>

                        <li><a href="packagesrestaurant.php">Restauração</a></li>


                        <li>
                            <a href="#" class="dropdown-toggle">Descobrir</a>

                            <ul>
                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                <li><a href="testimonials.php">Avaliações</a></li>
                                <li><a href="terms.php" class="active">Termos</a></li>
                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contatos</a></li>
                    </ul>
                </nav>


                <?php
            }

            ?>
            <?php

            function bodyterm()
            {
                ?>
                <!-- Main -->
                <div id="main">
                    <div class="inner">
                        <h1>Condições</h1>

                        <div class="image main">
                            <img src="images/banner-image-5-1920x500.jpg" class="img-fluid" alt=""/>
                        </div>

                        <h2 class="m-n">1.Copyright e outros direitos de propriedade</h2>
                        <p> O conteúdo deste website, incluindo marcas, desenhos, logotipos, texto, imagens, materiais
                            audio e de vídeo, é propriedade da CMMG, a menos que indicado de outro modo através de uma
                            referência à sua fonte, e está protegido nos termos gerais de direito e pela legislação
                            nacional e internacional de proteção da Propriedade Intelectual. Não é permitido exibir,
                            reproduzir, distribuir, modificar, transmitir ou usar os conteúdos de forma alguma, para
                            nenhum propósito público ou comercial sem o prévio e expresso consentimento por escrito das
                            Companhias.</p>

                        <h2 class="m-n">2.Conteúdos e garantias</h2>
                        <p>Não obstante, o utilizador concorda em não transmitir a este website nenhum conteúdo ilícito,
                            ameaçador, acusatório, difamatório, obsceno, escandaloso, pornográfico ou profano, ou
                            qualquer outro conteúdo que possa constituir ou encorajar conduta que viole alguma lei. A
                            CMMG cooperará plenamente com quaisquer autoridades competentes para a aplicação da lei ou
                            despacho de tribunal solicitando ou ordenando à CMMG que revele a identidade ou ajude a
                            identificar ou localizar qualquer pessoa que transmita tal conteúdo.</p>

                        <h2 class="m-n">3.Responsabilidade, responsabilidade, uso e risco</h2>
                        <p>A CMMG e todos os seus responsáveis legais, diretores, empregados e agentes, bem como
                            qualquer outra parte envolvida na criação, produção, manutenção ou implementação deste
                            website, não serão responsáveis perante qualquer utilizador do website, por qualquer
                            possível dano, prejuízo ou lesão (incluindo qualquer perda de lucro cessante e danos morais,
                            indireta, acidental ou consequente perda) que advenham da utilização correta ou incorreta
                            destes sites e seu conteúdo, do acesso ao computador ou sistema informático do utilizador
                            por terceiros, vírus, etc.</p>

                    </div>
                </div>


                <?php
            }

            ?>

            <?php

            function topint(){
            ?>
            <!DOCTYPE HTML>
            <html>
            <head>
                <title>PHPJabbers.com | Free Travel Website Template</title>
                <meta charset="utf-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                <link rel="stylesheet" href="assets/css/main.css"/>
                <noscript>
                    <link rel="stylesheet" href="assets/css/noscript.css"/>
                </noscript>
            </head>
            <body class="is-preload">
            <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                <header id="header">
                    <div class="inner">

                        <!-- Logo -->
                        <a href="index.php" class="logo">
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

                <?php
                }
                ?>
                <?php

                function Menuint()
                {
                    ?>
                    <!-- Menu -->
                    <nav id="menu">
                        <h2>Menu</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>

                            <li><a href="packages.php">Alojamento</a></li>

                            <li><a href="blog.php">Blog</a></li>

                            <li><a href="packagesrestaurant.php">Restauração</a></li>


                            <li>
                                <a href="#" class="dropdown-toggle">Descobrir</a>

                                <ul>
                                    <li><a href="about.php">Sobre S. Pedro</a></li>
                                    <li><a href="testimonials.php">Avaliações</a></li>
                                    <li><a href="terms.php">Termos</a></li>
                                    <li><a href="pontosdeinteresse.php" class="active">Pontos de Interesse</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contatos</a></li>
                        </ul>
                    </nav>
                    <?php
                }

                ?>
                <?php

                function bodyint()
                {
                    ?>
                    <!-- Main -->
                    <div id="main">
                        <div class="inner">
                            <h1>Página Cultural</h1>






                            <div class="image main">
                                <img src="images/banner-image-7-1920x500.jpg" class="img-fluid" alt=""/>
                            </div>
                            <?php
                            include_once("config.inc.php");
                            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                            $con->set_charset("utf8");
                            $sql = "SELECT * from  setores 
inner join categorias on setorCategoriaId = categoriaId
";
                            $resultado = mysqli_query($con, $sql);


                            ?>
                            <section class="tiles">
                                <?php
                                while ($dados = mysqli_fetch_array($resultado)) {
                                    ?>


                                    <article class="style1">
                                                <span class="image">
                                                    <img src="<?php echo $dados ['setorURL'] ?>" alt=""/>
                                                </span>
                                        <a href="cultural.php?id=<?php echo $dados  ['setorId'] ?>">
                                            <h2><?php echo $dados  ['setorNome'] ?></h2>



                                        </a>
                                    </article>
                                    <?php
                                } ?>

                        </div>
                    </div>


                    <?php
                }

                ?>
                <?php

                function topped(){
                ?>
                <!DOCTYPE HTML>
                <html>
                <head>
                    <title>PHPJabbers.com | Free Travel Website Template</title>
                    <meta charset="utf-8"/>
                    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                    <link rel="stylesheet" href="assets/css/main.css"/>
                    <noscript>
                        <link rel="stylesheet" href="assets/css/noscript.css"/>
                    </noscript>
                </head>
                <body class="is-preload">
                <!-- Wrapper -->
                <div id="wrapper">

                    <!-- Header -->
                    <header id="header">
                        <div class="inner">

                            <!-- Logo -->
                            <a href="index.php" class="logo">
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

                    <?php
                    }
                    ?>
                    <?php

                    function Menuped(){
                    ?>
                    <!-- Menu -->
                    <nav id="menu">
                        <h2>Menu</h2>

                        <ul>
                            <li><a href="index.php">Home</a></li>

                            <li><a href="packages.php">Alojamento</a></li>

                            <li><a href="blog.php">Blog</a></li>

                            <li><a href="packagesrestaurant.php">Restauração</a></li>


                            <li>
                                <a href="#" class="dropdown-toggle">Descobrir</a>

                                <ul>
                                    <li><a href="about.php">Sobre S. Pedro</a></li>
                                    <li><a href="testimonials.php">Avaliações</a></li>
                                    <li><a href="terms.php">Termos</a></li>
                                    <li><a href="pontosdeinteresse.php" class="active">Pontos de Interesse</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contatos</a></li>
                        </ul>
                    </nav>
                    <?php
                    }
                    ?>
                    <?php

                    function bodyped(){
                    ?>

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                    $id = intval($_GET["id"]);
                    $sql = "  SELECT * from  cultural   inner  join lendas on lendaCulturalId = culturalId where culturalId=".$id;


                    $resultCultural = mysqli_query($con, $sql);


                    ?>

                    <!-- Main -->
                    <div id="main">
                        <div class="inner">

                            <?php
                            if( $resultCultural = mysqli_query($con, $sql)){
                                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                $id = intval($_GET["id"]);
                                $sql = "  SELECT * from  cultural   inner  join lendas on lendaCulturalId = culturalId where culturalId=".$id;


                                $resultCultural1 = mysqli_query($con, $sql);
                                $dadosCultural1 = mysqli_fetch_array( $resultCultural1);

                            ?>
                            <h1><?php echo $dadosCultural1["culturalNome"] ?> </h1>

                            <div class="image main">
                                <img  src="<?php echo $dadosCultural1 ['culturalURL'] ?>" class="img-fluid" alt=""/>
                            </div>
                            <?php
                            }
                            ?>



                            <?php
                          while(  $dadosCultural2 = mysqli_fetch_array( $resultCultural)){


                              ?>

                            <h2 class="m-n"><?php echo $dadosCultural2 ['lendaDescricaoTitu'] ?></h2>
                            <p><?php echo $dadosCultural2 ['lendaDescricao'] ?> <br>
                            </p>




                    <?php
                                }
                    ?>

                            <?php
                            if( $resultCultural = mysqli_query($con, $sql) ){
                                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                $id = intval($_GET["id"]);
                                $sql = "  SELECT * from  cultural   inner  join caracteristicas on caracteristicaCulturalId = culturalId where culturalId=".$id;


                                $resultCultural1 = mysqli_query($con, $sql);
                                $dadosCultural3 = mysqli_fetch_array( $resultCultural1);

                                ?>
                                    <?php
                                    if( $dadosCultural3 ){


                                    ?>
                                        <h2 class="m-n">Características do Percurso</h2>
                                        <p><b>Nome</b> <?php echo $dadosCultural3["caracteristicaNome"] ?> <br>
                                            <b>Código</b> <?php echo $dadosCultural3["caracteristicaCodigo"] ?><br>
                                            <b>Tipologia</b> <?php echo $dadosCultural3["caracteristicaTipologia"] ?><br>
                                            <b>Distância</b> <?php echo $dadosCultural3["caracteristicaDistancia"] ?><br>
                                            <b>Duração aproximada</b><?php echo $dadosCultural3["caracteristicaDuracaoAproximada"] ?>h<br>
                                            <b>Tipo de piso</b> <?php echo $dadosCultural3["caracteristicaTipoPiso"] ?><br>
                                            <b>Grau de dificuldade</b> <?php echo $dadosCultural3["caracteristicaGrauDificuldade"] ?><br>
                                            <b>Local de Partida </b> <?php echo $dadosCultural3["caracteristicaLocalPartida"] ?><br>
                                            <b>Local de Chegada </b> <?php echo $dadosCultural3["caracteristicaLocalChegada"] ?><br>
                                            <b>Coordenadas geográficas </b><?php echo $dadosCultural3["caracteristicaCoordenadaGeograficas"] ?> <br>


                                    <?php
                                    }
                                    ?>



                                <?php
                            }
                            ?>


                                            <?php
                                            if( $resultCultural = mysqli_query($con, $sql) ){
                                            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                            $id = intval($_GET["id"]);
                                            $sql = "  SELECT * from  cultural   inner  join Ficheiros on ficheiroCulturalId = culturalId where culturalId=".$id;


                                            $resultCultural6 = mysqli_query($con, $sql);


                                            ?>
                                            <?php
                                            if( $resultCultural6  ) {
                                            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                            $id = intval($_GET["id"]);
                                            $sql = "  SELECT * from  cultural   inner  join Ficheiros on ficheiroCulturalId = culturalId where culturalId=".$id;


                                            $resultCultural9 = mysqli_query($con, $sql);
                                            $dadosCultural8 = mysqli_fetch_array( $resultCultural9)
                                            ?>
                                            <?php
                                            if( $dadosCultural8  ) {
                                            ?>
                                                         <h2 class="m-n">Ficheiros</h2>
                                                <?php
                                                }
                                                ?>
                                            <?php
                                            }
                                                ?>
                                            <?php
                                            while(  $dadosCultural7 = mysqli_fetch_array( $resultCultural6)){


                                            ?>



                        <img src="../../../a_logotipos/logo_icon_pdf_14_14.gif" width="16" height="16">
                            <a href="<?php echo $dadosCultural7 ['ficheiroURL'] ?>"
                               target="_blank"><?php echo $dadosCultural7 ['ficheiroNome'] ?></a><br>






                        <?php
                        }
                        ?>



                                <?php
                                }
                                ?>































                        </div>
                    </div>

                    <?php
                    }
                    ?>
                    <?php

                    function topblog(){
                    ?>
                    <!DOCTYPE HTML>
                    <html>
                    <head>
                        <title>PHPJabbers.com | Free Travel Website Template</title>
                        <meta charset="utf-8"/>
                        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                        <link rel="stylesheet" href="assets/css/main.css"/>
                        <noscript>
                            <link rel="stylesheet" href="assets/css/noscript.css"/>
                        </noscript>
                    </head>
                    <body class="is-preload">
                    <!-- Wrapper -->
                    <div id="wrapper">

                        <!-- Header -->
                        <header id="header">
                            <div class="inner">

                                <!-- Logo -->
                                <a href="index.php" class="logo">
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


                        <?php
                        }
                        ?>
                        <?php

                        function Menublog(){
                        ?>
                        <!-- Menu -->
                        <nav id="menu">
                            <h2>Menu</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>

                                <li><a href="packages.php">Alojamento</a></li>

                                <li><a href="blog.php" class="active">Blog</a></li>

                                <li><a href="packagesrestaurant.php">Restauração</a></li>

                                <li>
                                    <a href="#" class="dropdown-toggle">Descobrir</a>

                                    <ul>
                                        <li><a href="about.php">Sobre S. Pedro</a></li>
                                        <li><a href="testimonials.php">Avaliações</a></li>
                                        <li><a href="terms.php">Termos</a></li>
                                        <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contatos</a></li>
                            </ul>
                        </nav>


                        <?php
                        }
                        ?>
                        <?php

                        function bodyblog(){
                        ?>
                        <!-- Main -->
                        <div id="main">
                            <div class="inner">
                                <h1>Blog</h1>

                                <div class="image main">
                                    <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt=""/>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">

                                                <?php
                                                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                                $sql = "SELECT * from noticias";

                                                $resultado = mysqli_query($con, $sql);


                                                ?>

                                                <?php
                                                while ($dados = mysqli_fetch_array($resultado)) {
                                                    ?>

                                                    <div class="col-sm-6 text-center">
                                                        <img src="<?php echo $dados ['noticiaURL'] ?>" class="img-fluid" alt=""/>

                                                        <h2 class="m-n"><a href="blog-post.php?id=<?php echo $dados  ['noticiaId'] ?>"><?php echo $dados  ['noticiaTitulo'] ?></a></h2>

                                                        <p> John Doe &nbsp;|&nbsp; <?php echo $dados  ['noticiaData'] ?> <?php echo $dados  ['noticiasH'] ?> </p>
                                                    </div>






                                                    <?php
                                                }?>















                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-group">
                                                <h4>Blog Search</h4>
                                            </div>



                                            <div class="col-12 ">
                                                <div class="form-group">

                                                    <!-- ********************************************************* -->
                                                    <label for="nome">Pesquisa:</label>
                                                    <input type="text" class="form-control" id="searchNome" list="users">
                                                    <input type="hidden" id="idUser">
                                                    <datalist id="users">
                                                        <?php
                                                        $query = "SELECT * FROM 06hugo_utilizadores";
                                                        $resultado = mysqli_query($con, $query);
                                                        while ($users = mysqli_fetch_array($resultado)) {
                                                            ?>
                                                            <option value="<?php echo $users["utilizadorId"]; ?>"><?php echo $users["utilizadorId"].' - '.$users['utilizadorNome'] ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-12" id="resultadosPesquisa" >
                                                    </div>
                                                </div>
                                            </div>

















































                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search"
                                                           aria-label="Search" aria-describedby="basic-addon2">

                                                    <span class="input-group-addon"><a href="#"><i
                                                                    class="fa fa-search"></i></a></span>
                                                </div>
                                            </div>

                                            <br>

                                            <p><a href="#">Famoso fotógrafo chega a São Pedro de Moel</a></p>

                                            <p><a href="#">Projeto "Azul Mar" aprovada pela CMMG</a></p>

                                            <p><a href="#">Restaurante "Madeira Pinho" inaugura no Sábado </a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


























                        <!-- Js Plugins -->
                        <script src="js/jquery-3.3.1.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/jquery.magnific-popup.min.js"></script>
                        <script src="js/jquery.slicknav.js"></script>
                        <script src="js/owl.carousel.min.js"></script>
                        <script src="js/jquery.nice-select.min.js"></script>
                        <script src="js/mixitup.min.js"></script>
                        <script src="js/main.js"></script>
                        <script src="js/common.js"></script>


                        <script>
                            $('document').ready(function () {

                                <?php
                                if($menu == ESTABELECIMENTOSP){
                                ?>

                                $('#searchEstabelecimento').keyup(function () {
                                    fillTableEstabelecimentosProcurar(this.value, $('#searchCategoria').val(), $('#searchDistrito').val());
                                });
                                $('#searchCategoria').change(function () {
                                    fillTableEstabelecimentosProcurar($('#searchEstabelecimento').val(), this.value, $('#searchDistrito').val());
                                });
                                $('#searchDistrito').change(function () {
                                    fillTableEstabelecimentosProcurar($('#searchEstabelecimento').val(), $('#searchCategoria').val(), this.value);
                                });
                                fillTableEstabelecimentosProcurar();

                                <?php }
                                if ($menu == GALERIA){
                                ?>
                                $('#search').keyup(function () {
                                    fillTableImagens(this.value,<?php echo $id ?>);
                                });
                                fillTableImagens('',<?php echo $id ?>);
                                <?php }
                                ?>
                                <?php
                                if ($menu == RESERVAS){
                                ?>
                                $('#search').keyup(function () {
                                    fillTableReservas(this.value,<?php echo $id ?>);
                                });
                                fillTableReservas('',<?php echo $id ?>);
                                <?php
                                }if($menu == SINGLE){
                                ?>
                                listaComentarios(<?php echo $id ?>);
                                <?php
                                }if($menu == RESERVASADMIN){
                                ?>
                                $('#tableContent').keyup(function () {
                                    fillTableReservasAdmin(this.value,<?php echo $id ?>);

                                });
                                fillTableReservasAdmin(<?php echo $id ?>);
                                <?php
                                if($menu == HOME ){
                                ?>
                                $('#tableContent').keyup(function () {
                                    valido(this.value);
                                });
                                valido();
                                <?php
                                }
                                }
                                ?>
                            })
                        </script>







                        <?php
                        }
                        ?>
                        <?php

                        function toppost(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>
                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menupost()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="packages.php">Alojamento</a></li>

                                        <li><a href="blog.php" class="active">Blog</a></li>

                                        <li><a href="packagesrestaurant.php">Restauração</a></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodypost()
                            {
                                ?>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");

                                $id = intval($_GET["id"]);
                                $sql = "SELECT * from noticias  where noticiaId=".$id;
                                $resultado = mysqli_query($con, $sql);
                                $dados = mysqli_fetch_array($resultado);
                                ?>
                                <!-- Main -->
                                <div id="main">
                                    <div class="inner">
                                        <h1><?php echo $dados ['noticiaTitulo'] ?></h1>

                                        <div class="image main">
                                            <img src="<?php echo $dados ['noticiaURLFundo'] ?>" class="img-fluid" alt=""/>
                                        </div>













                                        <p><?php echo $dados ['noticiaDescricao'] ?></p>



                                    </div>
                                </div>

                                <?php
                            }

                            ?>
                            <?php

                            function footerpost(){
                            ?>
                            <!-- Footer -->
                            <footer id="footer">
                                <div class="inner">
                                    <section>
                                        <h2> Enviar comentário</h2>

                                        <form method="post" action="#">
                                            <div class="fields">
                                                <div class="field half">
                                                    <input type="text" name="name" id="name" placeholder="Nome"/>
                                                </div>

                                                <div class="field half">
                                                    <input type="text" name="email" id="email" placeholder="Email"/>
                                                </div>

                                                <div class="field">
                                                    <textarea name="message" id="message" rows="3"
                                                              placeholder="Mensagem"></textarea>
                                                </div>

                                                <div class="field text-right">
                                                    <label>&nbsp;</label>

                                                    <ul class="actions">
                                                        <li><input type="submit" value="Enviar" class="primary"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                    <section>

                                        <h2>Siga nas nossas Redes Sociais</h2>

                                        <ul class="icons">
                                            <li><a href="#" class="icon style2 fa-twitter"><span
                                                            class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon style2 fa-facebook"><span
                                                            class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon style2 fa-linkedin"><span
                                                            class="label">LinkedIn</span></a></li>
                                            <li><a href="#" class="icon style2 fa-behance"><span
                                                            class="label">Behance</span></a></li>
                                        </ul>
                                    </section>

                                    <ul class="copyright">
                                        <li>Copyright © 2020 Company Name</li>
                                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                    </ul>
                                </div>
                            </footer>

                        </div>

                        <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/js/jquery.scrolly.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/main.js"></script>

                        </body>
                        </html>
                        <?php
                        }
                        ?>
                        <?php

                        function topcont(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>

                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>
                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menucont()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="packages.php">Alojamento</a></li>

                                        <li><a href="blog.php">Blog</a></li>

                                        <li><a href="packagesrestaurant.php">Restauração</a></li>


                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php" class="active">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodycont()
                            {
                                ?>

                                <!-- Main -->
                                <div id="main">
                                    <div class="inner">
                                        <h1>Contatos</h1>

                                    </div>
                                </div>


                                <?php
                            }

                            ?>
                            <?php

                            function footercont(){
                            ?>
                            <!-- Footer -->
                            <footer id="footer">
                                <div class="inner">
                                    <section>
                                        <h2>Contato</h2>
                                        <form method="post" action="#">
                                            <div class="fields">
                                                <div class="field half">
                                                    <input type="text" name="name" id="name" placeholder="Nome"/>
                                                </div>

                                                <div class="field half">
                                                    <input type="text" name="email" id="email" placeholder="Email"/>
                                                </div>

                                                <div class="field">
                                                    <input type="text" name="subject" id="subject"
                                                           placeholder="Assunto da mensagem"/>
                                                </div>

                                                <div class="field">
                                                    <textarea name="message" id="message" rows="3"
                                                              placeholder="Mensagem"></textarea>
                                                </div>

                                                <div class="field text-right">
                                                    <label>&nbsp;</label>

                                                    <ul class="actions">
                                                        <li><input type="submit" value="Enviar Mensagem"
                                                                   class="primary"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                    <section>
                                        <h2>Contatos Inf</h2>

                                        <ul class="alt">
                                            <li><span class="fa fa-envelope-o"></span> <a
                                                        href="#">contact@company.com</a></li>
                                            <li><span class="fa fa-phone"></span> +1 333 4040 5566</li>
                                            <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC
                                                10001 United States of America
                                            </li>
                                        </ul>

                                        <h2>Siga nas nossas Redes Sociais</h2>

                                        <ul class="icons">
                                            <li><a href="#" class="icon style2 fa-twitter"><span
                                                            class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon style2 fa-facebook"><span
                                                            class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
                                            </li>
                                            <li><a href="#" class="icon style2 fa-linkedin"><span
                                                            class="label">LinkedIn</span></a></li>
                                        </ul>
                                    </section>

                                    <ul class="copyright">
                                        <li>Copyright © 2020 Company Name</li>
                                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                    </ul>
                                </div>
                            </footer>

                        </div>

                        <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/js/jquery.scrolly.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/main.js"></script>

                        </body>
                        </html>
                        <?php
                        }
                        ?>

                        <?php

                        ?>
                        <?php

                        function topind(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>

                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>
                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">
                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menuind()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php" class="active">Home</a></li>

                                        <li><a href="Backoffice/login/colorlib-regform-7/singin.html">Login</a></li>


                                        <li><a href="packages.php">Alojamento</a></li>

                                        <li><a href="blog.php">Blog</a></li>

                                        <li><a href="packagesrestaurant.php">Restauração</a></li>
                                     <!--  <li><a href="#" data-toggle="modal" data-target="#login">Login</a> </li>
                                        <li><a href="#" data-toggle="modal" data-target="#login">Loginfff</a> </li>
                                        -->







                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contactos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodyind()
                            {
                                ?>

                                <!-- Main -->
                                <div id="main">










                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <?php
                                            $dir = "slideshowImages";
                                            $cdir = scandir($dir);
                                            $cont = 0;
                                            foreach ($cdir as $key => $value) {
                                                if (!in_array($value, array(".", ".."))) {
                                                    ?>
                                                    <li data-target="#carouselExampleIndicators"
                                                        data-slide-to="<?php echo $cont; ?>" class="
                                <?php if ($cont == 0) {
                                                        echo " active ";

                                                    } ?>"></li>
                                                    <?php
                                                    $cont++;
                                                }

                                            }
                                            ?>
                                        </ol>
                                        <div class="carousel-inner">
                                            <?php
                                            $cdir = scandir($dir);
                                            $cont = 0;
                                            foreach ($cdir as $key => $value) {
                                                if (!in_array($value, array(".", ".."))) {
                                                    ?>
                                                    <div class="carousel-item
						    <?php if ($cont == 0) {
                                                        echo " active ";

                                                    } ?>">

                                                        <img class="d-block w-100"
                                                             src="<?php echo $dir . "/" . $value ?>" alt="First slide">
                                                    </div>
                                                    <?php
                                                    $cont++;
                                                }
                                            }
                                            ?>

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                           data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <br>
                                    <br>

                                    <div class="inner">
                                        <!-- About Us -->
                                        <header id="inner">
                                            <h1>Encontre seu novo lugar para visitar!!</h1>
                                            <p> Banhando-se nas areias douradas do Atlântico, povoada de belas matas, a
                                                aldeia de S. Pedro propicia a quem a visita, locais inesquecíveis e de
                                                raro encanto.</p>
                                        </header>

                                        <br>

                                        <h2 class="h2">Alojamento</h2>


                                        <!-- Packages -->
                                        <?php
                                        include_once("config.inc.php");
                                        $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                        $con->set_charset("utf8");
                                       $sql = "SELECT * 
from  estabelecimentos 
inner join categorias on estabelecimentoCategoriaId = categoriaId
where categoriaNome='Alojamento' limit 6" ;

                                        $resultado = mysqli_query($con, $sql);


                                        ?>
                                        <section class="tiles">
                                            <?php
                                            while ($dados = mysqli_fetch_array($resultado)) {
                                                ?>


                                                <article class="style1">
                                                <span class="image">
                                                    <img src="<?php echo $dados ['estabelecimentoURL'] ?>" alt=""/>
                                                </span>
                                                    <a href="package-details.php?id=<?php echo $dados  ['estabelecimentoId'] ?>">
                                                        <h2><?php echo $dados  ['estabelecimentoNome'] ?></h2>

                                                        <p><strong>€<?php echo $dados  ['estabelecimentoPrecoMin'] ?> - €<?php echo $dados  ['estabelecimentoPrecoMax'] ?></strong></p>

                                                        <p>
                                                            <small>
                                                                <i class="fa fa-calendar"></i> Disponibilidade &nbsp;
                                                                <i class="fa fa-cube"></i> Mínimo de 2 diárias &nbsp;
                                                                <i class="fa fa-wifi"></i> Acesso à internet
                                                            </small>
                                                        </p>
                                                    </a>
                                                </article>
                                                <?php
                                            }?>
                                        </section>

                                        <p class="text-center"><a href="packages.php">Ver Alojamento &nbsp;<i
                                                        class="fa fa-long-arrow-right"></i></a></p>

                                        <br>

                                        <h2 class="h2">Restauração</h2>

                                        <!-- Packages -->
                                        <?php

                                        include_once("config.inc.php");
                                        $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                        $con->set_charset("utf8");
                                        $sql = "SELECT * 
from  estabelecimentos 
inner join categorias on estabelecimentoCategoriaId = categoriaId
where categoriaNome='Restauracao' limit 6" ;

                                        $resultado = mysqli_query($con, $sql);


                                        ?>
                                        <section class="tiles">
                                            <?php
                                            while ($dados = mysqli_fetch_array($resultado)) {
                                                ?>


                                                <article class="style1">
                                                <span class="image">
                                                    <img src="<?php echo $dados ['estabelecimentoURL'] ?>" alt=""/>
                                                </span>
                                                    <a href="package-details.php?id=<?php echo $dados  ['estabelecimentoId'] ?>">
                                                        <h2><?php echo $dados  ['estabelecimentoNome'] ?></h2>

                                                        <p><strong>€<?php echo $dados  ['estabelecimentoPrecoMin'] ?> - €<?php echo $dados  ['estabelecimentoPrecoMax'] ?></strong></p>

                                                        <p>
                                                            <small>
                                                                <i class="fa fa-calendar"></i> Disponibilidade &nbsp;
                                                                <i class="fa fa-cube"></i> Mínimo de 2 diárias &nbsp;
                                                                <i class="fa fa-wifi"></i> Acesso à internet
                                                            </small>
                                                        </p>
                                                    </a>
                                                </article>
                                                <?php
                                            } ?>
                                        </section>





                                        <p class="text-center"><a href="packagesrestaurant.php">Ver Restauração &nbsp;<i
                                                        class="fa fa-long-arrow-right"></i></a></p>


                                        <br>
                                        <h2 class="h2">Avaliações</h2>

                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                <p class="m-n"><em>"Muito bonita e acolhedora. E numa manhã de Setembro,
                                                        cheia de nevoeiro, fica ainda mais bonita, e misteriosa."</em>
                                                </p>

                                                <p><strong> - John Doe</strong></p>
                                            </div>

                                            <div class="col-sm-6 text-center">
                                                <p class="m-n"><em>"E um lugar onde se admira a natureza e lugar pra
                                                        refletir."</em></p>

                                                <p><strong>- Ana Luíza</strong></p>
                                            </div>
                                        </div>





                                        <div class="location-search1 col-lg-12 mt-3 ">
                                            <h5>Nome do Estabelecimento</h5>

                                            <input class="location-search1 nice-select1" type="text" id="searchEstabelecimento">
                                        </div>



















                                        <p class="text-center"><a href="testimonials.php">Consulte mais informação
                                                &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

                                        <br>

                                        <h2 class="h2">Blog</h2>

                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                                <img src="images/blog-1-720x480.jpg" class="img-fluid" alt=""/>

                                                <h2 class="m-n"><a href="#">Famoso fotógrafo chega a São Pedro de
                                                        Moel</a></h2>

                                                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                                            </div>

                                            <div class="col-sm-4 text-center">
                                                <img src="images/blog-2-720x480.jpg" class="img-fluid" alt=""/>

                                                <h2 class="m-n"><a href="#">Projeto "Azul Mar" aprovada pela CMMG</a>
                                                </h2>

                                                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                                            </div>

                                            <div class="col-sm-4 text-center">
                                                <img src="images/blog-3-720x480.jpg" class="img-fluid" alt=""/>

                                                <h2 class="m-n"><a href="#">Restaurante "Madeira Pinho" inaugura no
                                                        Sábado </a></h2>

                                                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                                            </div>
                                        </div>

                                        <p class="text-center"><a href="blog.php">Consulte mais informação &nbsp;<i
                                                        class="fa fa-long-arrow-right"></i></a></p>


                                    </div>
                                </div>

                                <?php
                            }

                            ?>

                            <?php

                            function wys()
                            {
                                ?>












                                <?php
                            }
                            ?>



                            <?php

                            function footerind(){
                            ?>
                            <!-- Footer -->
                            <footer id="footer">
                                <div class="inner">
                                    <section>
                                        <h2>Contacto</h2>
                                        <form method="post" action="#">
                                            <div class="fields">
                                                <div class="field half">
                                                    <input type="text" name="name" id="name" placeholder="Nome"/>
                                                </div>

                                                <div class="field half">
                                                    <input type="text" name="email" id="email" placeholder="Email"/>
                                                </div>

                                                <div class="field">
                                                    <input type="text" name="subject" id="subject"
                                                           placeholder="Assunto da mensagem"/>
                                                </div>

                                                <div class="field">
                                                    <textarea name="message" id="message" rows="3"
                                                              placeholder="Mensagem"></textarea>
                                                </div>

                                                <div class="field text-right">
                                                    <label>&nbsp;</label>

                                                    <ul class="actions">
                                                        <li><input type="submit" value="Enviar Mensagem"
                                                                   class="primary"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                    <section>
                                        <h2>Contactos Inf</h2>

                                        <ul class="alt">
                                            <li><span class="fa fa-envelope-o"></span> <a
                                                        href="#">contact@company.com</a></li>
                                            <li><span class="fa fa-phone"></span> +1 333 4040 5566</li>
                                            <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC
                                                10001 United States of America
                                            </li>
                                        </ul>

                                        <h2>Siga nas nossas Redes Sociais</h2>

                                        <ul class="icons">
                                            <li><a href="#" class="icon style2 fa-twitter"><span
                                                            class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon style2 fa-facebook"><span
                                                            class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
                                            </li>
                                            <li><a href="#" class="icon style2 fa-linkedin"><span
                                                            class="label">LinkedIn</span></a></li>
                                        </ul>
                                    </section>

                                    <ul class="copyright">
                                        <li>Copyright © 2020 Company Name</li>
                                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                    </ul>
                                </div>
                            </footer>

                        </div>

                        <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/js/jquery.scrolly.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/main.js"></script>

                        </body>
                        </html>
                        <?php
                        }
                        ?>

                        <?php

                        function topalres(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>


                            <!-- Bootstrap CSS -->

                            <!-- Site CSS -->
                            <link rel="stylesheet" href="assets/css/style_reserva_aloj.css">
                            <!-- Pickadate CSS -->
                            <link rel="stylesheet" href="css3/classic.css">
                            <link rel="stylesheet" href="css3/classic.date.css">
                            <link rel="stylesheet" href="css3/classic.time.css">
                            <!-- Responsive CSS -->
                            <link rel="stylesheet" href="css3/responsive.css">
                            <!-- Custom CSS -->
                            <link rel="stylesheet" href="css3/custom.css">


                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menualres()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="packages.php" class="active">Alojamento</a></li>

                                        <li><a href="blog.php">Blog</a></li>

                                        <li><a href="packagesrestaurant.php">Restauração</a></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contatos</a></li>
                                    </ul>
                                </nav>

                                <?php
                            }

                            ?>
                            <?php

                            function bodyalres(){
                            ?>

                            <!-- Main -->
                            <div id="main">
                                <div class="inner">
                                    <h1>Reserva</h1>

                                    <div class="image main">
                                        <img src="images/blog-fullscreen-1-1920x700.jpg" class="img-fluid" alt=""/>
                                    </div>


                                    <!-- Start Reservation -->
                                    <div class="reservation-box">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="heading-title text-center">
                                                        <h2>Reserva</h2>

                                                    </div>
                                                </div>
                                            </div>
































































                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                    <div class="contact-block">
                                                        <form id="contactForm">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h3>Reservar Local</h3>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <select class="custom-select d-block form-control"
                                                                                    id="person" required
                                                                                    data-error="Insere o alojamento">
                                                                                <option disabled selected>Escolha o
                                                                                    alojamento*
                                                                                </option>
                                                                                <option value="1">Casa para aluguel
                                                                                </option>
                                                                                <option value="2">Mar e Sol Hotel Spa
                                                                                </option>
                                                                                <option value="3">Hotel Verde Pinho
                                                                                </option>
                                                                                <option value="4">HomeMoel</option>
                                                                                <option value="5">Hotel Miramar</option>
                                                                                <option value="6">Orbitur S Pedro De
                                                                                    Moel
                                                                                </option>
                                                                            </select>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input id="input_date"
                                                                                   class="datepicker picker__input form-control"
                                                                                   name="date" value="" equired
                                                                                   data-error="Insere a data">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input id="input_date"
                                                                                   class="datepicker picker__input form-control"
                                                                                   name="date" value="" equired
                                                                                   data-error="Insere a data">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <select class="custom-select d-block form-control"
                                                                                    id="person" required
                                                                                    data-error="Insere o nº de Adultos">
                                                                                <option disabled selected>Nº de
                                                                                    Adultos
                                                                                </option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7+">7</option>
                                                                            </select>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <select class="custom-select d-block form-control"
                                                                                    id="person" required
                                                                                    data-error="Insere o nº de crianças">
                                                                                <option disabled selected>Nº de
                                                                                    Crianças
                                                                                </option>
                                                                                <option value="1">0</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5+">5</option>

                                                                            </select>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h3>Contactos</h3>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                   id="name" name="name"
                                                                                   placeholder="Nome" required
                                                                                   data-error="Insere o seu nome">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Email"
                                                                                   id="email" class="form-control"
                                                                                   name="email" required
                                                                                   data-error="Insere o seu email">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Número"
                                                                                   id="phone" class="form-control"
                                                                                   name="phone" required
                                                                                   data-error="Insere o seu nº de telemóvel">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="submit-button text-center">
                                                                        <button class="btn btn-common" id="submit"
                                                                                type="submit">Finalizar Reserva
                                                                        </button>
                                                                        <div id="msgSubmit"
                                                                             class="h3 text-center hidden"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Reservation -->


                                    <?php
                                    }
                                    ?>
                                    <?php

                                    function footeralres(){
                                    ?>


                                    <!-- Footer -->
                                    <footer id="footer">
                                        <div class="inner">
                                            <section>
                                                <ul class="icons">
                                                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitterr</span></a>
                                                    </li>
                                                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a>
                                                    </li>
                                                    <li><a href="#" class="icon style2 fa-instagram"><span
                                                                    class="label">Instagram</span></a></li>
                                                    <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a>
                                                    </li>
                                                </ul>

                                                &nbsp;
                                            </section>

                                            <ul class="copyright">
                                                <li>Copyright © 2020 Company Name</li>
                                                <li>Template by: <a
                                                            href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                            </ul>
                                        </div>
                                    </footer>

                                </div>

                                <!-- Scripts -->
                                <script src="assets/js/jquery.min.js"></script>
                                <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                                <script src="assets/js/jquery.scrolly.min.js"></script>
                                <script src="assets/js/jquery.scrollex.min.js"></script>
                                <script src="assets/js/main.js"></script>


                                <!-- ALL JS FILES -->
                                <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

                                <!-- ALL JS FILES -->
                                <script src="js3/jquery-3.2.1.min.js"></script>
                                <script src="js3/popper.min.js"></script>
                                <script src="js3/bootstrap.min.js"></script>
                                <!-- ALL PLUGINS -->
                                <script src="js3/jquery.superslides.min.js"></script>
                                <script src="js3/images-loded.min.js"></script>
                                <script src="js3/isotope.min.js"></script>
                                <script src="js3/baguetteBox.min.js"></script>
                                <script src="js3/picker.js"></script>
                                <script src="js3/picker.date.js"></script>
                                <script src="js3/picker.time.js"></script>
                                <script src="js3/legacy.js"></script>
                                <script src="js3/form-validator.min.js"></script>
                                <script src="js3/contact-form-script.js"></script>
                                <script src="js3/custom.js"></script>


                        </body>
                        </html>
                        <?php
                        }
                        ?>
                        <?php

                        function toppackrese(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>


                            <!-- Bootstrap CSS -->

                            <!-- Site CSS -->
                            <link rel="stylesheet" href="assets/css/stylerestau.css">
                            <!-- Pickadate CSS -->
                            <link rel="stylesheet" href="css2/classic.css">
                            <link rel="stylesheet" href="css2/classic.date.css">
                            <link rel="stylesheet" href="css2/classic.time.css">
                            <!-- Responsive CSS -->
                            <link rel="stylesheet" href="css2/responsive.css">
                            <!-- Custom CSS -->
                            <link rel="stylesheet" href="css2/custom.css">


                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menupackrese()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="packages.php">Alojamento</a></li>

                                        <li><a href="blog.php">Blog</a></li>

                                        <li><a href="packagesrestaurant.php" class="active">Restauração</a></li>
                                        <li><a href="packagesrestaurant_reserva.php" class="active">Reserva</a></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodypackrese(){
                            ?>

                            <!-- Main -->
                            <div id="main">
                                <div class="inner">
                                    <h1>Reserva</h1>

                                    <div class="image main">
                                        <img src="images/all-bg.jpg" class="img-fluid" alt=""/>
                                    </div>


                                    <!-- Start Reservation -->
                                    <div class="reservation-box">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="heading-title text-center">
                                                        <h2>Reserva</h2>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                    <div class="contact-block">
                                                        <form id="contactForm">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h3>Reservar Local</h3>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input id="input_date"
                                                                                   class="ddatepicker picker__input form-control"
                                                                                   name="date" type="text" value=""
                                                                                   equired data-error="Insere o local">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input id="input_date"
                                                                                   class="datepicker picker__input form-control"
                                                                                   name="date" type="text" value=""
                                                                                   equired data-error="Insere a data">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input id="input_time"
                                                                                   class="time form-control picker__input"
                                                                                   required data-error="Insere a hora">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <select class="custom-select d-block form-control"
                                                                                    id="person" required
                                                                                    data-error="Insere o nº de pessoas">
                                                                                <option disabled selected>Nº de
                                                                                    Pessoas*
                                                                                </option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                            </select>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h3>Contactos</h3>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                   id="name" name="name"
                                                                                   placeholder="Nome" required
                                                                                   data-error="Insere o seu nome">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Email"
                                                                                   id="email" class="form-control"
                                                                                   name="email" required
                                                                                   data-error="Insere o seu email">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Número"
                                                                                   id="phone" class="form-control"
                                                                                   name="phone" required
                                                                                   data-error="Insere o seu nº de telemóvel">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="submit-button text-center">
                                                                        <button class="btn btn-common" id="submit"
                                                                                type="submit">Finalizar Reserva
                                                                        </button>
                                                                        <div id="msgSubmit"
                                                                             class="h3 text-center hidden"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Reservation -->


                                    <?php
                                    }
                                    ?>
                                    <?php

                                    function footerpackrese(){
                                    ?>

                                    <!-- Footer -->
                                    <footer id="footer">
                                        <div class="inner">
                                            <section>
                                                <ul class="icons">
                                                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitterr</span></a>
                                                    </li>
                                                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a>
                                                    </li>
                                                    <li><a href="#" class="icon style2 fa-instagram"><span
                                                                    class="label">Instagram</span></a></li>
                                                    <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a>
                                                    </li>
                                                </ul>

                                                &nbsp;
                                            </section>

                                            <ul class="copyright">
                                                <li>Copyright © 2020 Company Name</li>
                                                <li>Template by: <a
                                                            href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                            </ul>
                                        </div>
                                    </footer>

                                </div>

                                <!-- Scripts -->
                                <script src="assets/js/jquery.min.js"></script>
                                <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                                <script src="assets/js/jquery.scrolly.min.js"></script>
                                <script src="assets/js/jquery.scrollex.min.js"></script>
                                <script src="assets/js/main.js"></script>
                                <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

                                <!-- ALL JS FILES -->
                                <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

                                <!-- ALL JS FILES -->
                                <script src="js2/jquery-3.2.1.min.js"></script>
                                <script src="js2/popper.min.js"></script>
                                <script src="js2/bootstrap.min.js"></script>
                                <!-- ALL PLUGINS -->
                                <script src="js2/jquery.superslides.min.js"></script>
                                <script src="js2/images-loded.min.js"></script>
                                <script src="js2/isotope.min.js"></script>
                                <script src="js2/baguetteBox.min.js"></script>
                                <script src="js2/picker.js"></script>
                                <script src="js2/picker.date.js"></script>
                                <script src="js2/picker.time.js"></script>
                                <script src="js2/legacy.js"></script>
                                <script src="js2/form-validator.min.js"></script>
                                <script src="js2/contact-form-script.js"></script>
                                <script src="js2/custom.js"></script>


                        </body>
                        </html>
                        <?php
                        }
                        ?>

                        <?php

                        function toppackrest(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>
                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>

                            <?php

                            function Menupackrest()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="packages.php">Alojamento</a></li>

                                        <li><a href="blog.php">Blog</a></li>

                                        <li><a href="packagesrestaurant.php" class="active">Restauração</a></li>
                                        <li><a href="packagesrestaurant_reserva.php" class="active">Reserva</a></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodypackrest()
                            {
                                ?>

                            <?php

                            ?>
                            <!-- Main -->
                            <div id="main">
                                <div class="inner">
                                    <h1>Restauração</h1>

                                    <div class="image main">
                                        <img src="images/rest1a.jpg" class="img-fluid" alt=""/>
                                    </div>

                                    <?php
                                    include_once("config.inc.php");
                                    $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                    $con->set_charset("utf8");
                                    $sql = "SELECT * 
from  estabelecimentos 
inner join categorias on estabelecimentoCategoriaId = categoriaId
where categoriaNome='Restauracao' " ;

                                    $resultado = mysqli_query($con, $sql);


                                    ?>
                                    <section class="tiles">
                                        <?php
                                        while ($dados = mysqli_fetch_array($resultado)) {
                                            ?>


                                            <article class="style1">
                                                <span class="image">
                                                    <img src="<?php echo $dados ['estabelecimentoURL'] ?>" alt=""/>
                                                </span>
                                                <a href="package-details.php?id=<?php echo $dados  ['estabelecimentoId'] ?>">
                                                    <h2><?php echo $dados  ['estabelecimentoNome'] ?></h2>

                                                    <p><strong>€<?php echo $dados  ['estabelecimentoPrecoMin'] ?> - €<?php echo $dados  ['estabelecimentoPrecoMax'] ?></strong></p>

                                                    <p>
                                                        <small>
                                                            <i class="fa fa-calendar"></i> Disponibilidade &nbsp;&nbsp;
                                                            <i class="fa fa-wifi"></i> Acesso à internet
                                                        </small>
                                                    </p>
                                                </a>
                                            </article>
                                            <?php
                                        }?>
                                    </section>



                                    <?php
                                    }

                                    ?>



                            <?php

                            function footerpackrest(){
                            ?>


                            <!-- Footer -->
                            <footer id="footer">
                                <div class="inner">
                                    <section>
                                        <ul class="icons">
                                            <li><a href="#" class="icon style2 fa-twitter"><span
                                                            class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon style2 fa-facebook"><span
                                                            class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
                                            </li>
                                            <li><a href="#" class="icon style2 fa-linkedin"><span
                                                            class="label">LinkedIn</span></a></li>
                                        </ul>

                                        &nbsp;
                                    </section>

                                    <ul class="copyright">
                                        <li>Copyright © 2020 Company Name</li>
                                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                    </ul>
                                </div>
                            </footer>

                        </div>

                        <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/js/jquery.scrolly.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/main.js"></script>

                        </body>
                        </html>
                        <?php
                        }
                        ?>
                        <?php

                        function toppack(){
                        ?>

                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>
                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menupack()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="packages.php" class="active">Alojamento</a></li>

                                        <li><a href="alojamento_reserva.php" class="active">Reserva</a></li>
                                        <li><a href="blog.php">Blog</a></li>

                                        <li><a href="packagesrestaurant.php">Restauração</a></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="HTMLoriginal/contact.html">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodypack()
                            {
                                ?>
                                <?php

                                ?>
                                <!-- Main -->
                                <div id="main">
                                    <div class="inner">
                                        <h1>Alojamento</h1>

                                        <div class="image main">
                                            <img src="images/banner-image-7-1920x500.jpg" class="img-fluid" alt=""/>
                                        </div>

                                        <?php
                                        include_once("config.inc.php");
                                        $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                        $con->set_charset("utf8");
                                        $sql = "SELECT * 
from  estabelecimentos 
inner join categorias on estabelecimentoCategoriaId = categoriaId
where categoriaNome='Alojamento' " ;

                                        $resultado = mysqli_query($con, $sql);


                                        ?>
                                        <section class="tiles">
                                            <?php
                                            while ($dados = mysqli_fetch_array($resultado)) {
                                                ?>


                                                <article class="style1">
                                                <span class="image">
                                                    <img src="<?php echo $dados ['estabelecimentoURL'] ?>" alt=""/>
                                                </span>
                                                    <a href="package-details.php?id=<?php echo $dados  ['estabelecimentoId'] ?>">
                                                        <h2><?php echo $dados  ['estabelecimentoNome'] ?></h2>

                                                        <p><strong>€<?php echo $dados  ['estabelecimentoPrecoMin'] ?> - €<?php echo $dados  ['estabelecimentoPrecoMax'] ?></strong></p>

                                                        <p>
                                                            <small>
                                                                <i class="fa fa-calendar"></i> Disponibilidade &nbsp;
                                                                <i class="fa fa-cube"></i> Mínimo de 2 diárias &nbsp;
                                                                <i class="fa fa-wifi"></i> Acesso à internet
                                                            </small>
                                                        </p>
                                                    </a>
                                                </article>
                                                <?php
                                            }?>
                                        </section>



                                <?php
                            }

                            ?>
                            <?php

                            function footerpack(){
                            ?>


                            <!-- Footer -->
                            <footer id="footer">
                                <div class="inner">
                                    <section>
                                        <ul class="icons">
                                            <li><a href="#" class="icon style2 fa-twitter"><span
                                                            class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon style2 fa-facebook"><span
                                                            class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
                                            </li>
                                            <li><a href="#" class="icon style2 fa-linkedin"><span
                                                            class="label">LinkedIn</span></a></li>
                                        </ul>

                                        &nbsp;
                                    </section>

                                    <ul class="copyright">
                                        <li>Copyright © 2020 Company Name</li>
                                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                    </ul>
                                </div>
                            </footer>

                        </div>

                        <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/js/jquery.scrolly.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/main.js"></script>

                        </body>
                        </html>
                        <?php
                        }
                        ?>
                        <?php

                        function toppackd(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <link rel="stylesheet" href="assets/css/stylemap.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>


                            <!-- Prata for body  -->
                            <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
                            <!-- Tangerine for small title -->
                            <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'
                                  type='text/css'>
                            <!-- Open Sans for title -->
                            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'
                                  type='text/css'>


                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="index.php" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menupackd()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="packages.php">Alojamento</a></li>
                                        <li><a href="alojamento_reserva.php" class="active">Reserva</a></li>
                                        <li><a href="blog.php">Blog</a></li>

                                        <li><a href="packagesrestaurant.php">Restauração</a></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="about.php">Sobre S. Pedro</a></li>
                                                <li><a href="testimonials.php" class="active">Avaliações</a></li>
                                                <li><a href="terms.php">Termos</a></li>
                                                <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>

                            <?php

                            function footerpackd(){
                            ?>


                            <!-- Footer -->
                            <footer id="footer">
                                <div class="inner">
                                    <section>
                                        <h2>Reserva</h2>
                                        <form method="post" action="#">
                                            <div class="fields">
                                                <div class="field half">
                                                    <input type="text" name="name" id="name" placeholder="Nome"/>
                                                </div>

                                                <div class="field half">
                                                    <input type="text" name="email" id="email" placeholder="Email"/>
                                                </div>

                                                <div class="field half">
                                                    <input type="text" name="phone" id="phone" placeholder="Telemóvel"/>
                                                </div>

                                                <div class="field quarter">
                                                    <input type="text" placeholder="De 08.07.2020"/>
                                                </div>

                                                <div class="field quarter">
                                                    <input type="text" placeholder="Até 08.07.2020"/>
                                                </div>

                                                <div class="field">
                                                    <textarea name="message" id="message" rows="3"
                                                              placeholder="Mensagem"></textarea>
                                                </div>

                                                <div class="field text-right">
                                                    <label>&nbsp;</label>

                                                    <ul class="actions">
                                                        <li><input type="submit" value="Enviar inquérito"
                                                                   class="primary"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                    <section>
                                        <h2>Contacto Info</h2>

                                        <ul class="alt">
                                            <li><span class="fa fa-envelope-o"></span> <a
                                                        href="#">contact@company.com</a></li>
                                            <li><span class="fa fa-phone"></span> +1 333 4040 5566</li>
                                            <li><span class="fa fa-mobile"></span> +1 333 4040 5566</li>
                                            <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC
                                                10001 United States of America
                                            </li>
                                        </ul>
                                    </section>

                                    <ul class="copyright">
                                        <li>Copyright © 2020 Company Name</li>
                                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                    </ul>
                                </div>
                            </footer>

                        </div>


                        <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/js/jquery.scrolly.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/main.js"></script>
                        <!-- jQuery library -->
                        <script src="assets/js/jquery.min.js"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="assets/js/bootstrap.js"></script>
                        <!-- Slick slider -->
                        <script type="text/javascript" src="assets/js/slick.js"></script>
                        <!-- Counter -->
                        <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
                        <!-- Gallery Lightbox -->
                        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
                        <!-- Date Picker -->
                        <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
                        <!-- Ajax contact form  -->
                        <script type="text/javascript" src="assets/js/app.js"></script>

                        <!-- Custom js -->
                        <script src="assets/js/custom.js"></script>


                        </body>
                        </html>
                        <?php
                        }
                        ?>


                        <?php

                        function toppackd2(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets/css/main.css"/>
                            <link rel="stylesheet" href="assets/css/style.css">
                            <noscript>
                                <link rel="stylesheet" href="assets/css/noscript.css"/>
                            </noscript>


                            <!-- Prata for body  -->
                            <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
                            <!-- Tangerine for small title -->
                            <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'
                                  type='text/css'>
                            <!-- Open Sans for title -->
                            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'
                                  type='text/css'>


                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="HTMLoriginal/index.html" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menupackd2()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="HTMLoriginal/index.html" class="active">Home</a></li>

                                        <li><a href="HTMLoriginal/packages.html">Alojamento</a></li>

                                        <li><a href="HTMLoriginal/blog.html">Blog</a></li>

                                        <li><a href="menu/yamifood/pontosdecomida.html">Restauração</a></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="HTMLoriginal/about.html">Sobre S. Pedro</a></li>
                                                <li><a href="HTMLoriginal/testimonials.html">Avaliações</a></li>
                                                <li><a href="HTMLoriginal/terms.html">Termos</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="HTMLoriginal/contact.html">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodypackd2()
                            {
                                ?>
                                <!-- Main -->
                                <div id="main">
                                    <div class="inner">
                                        <h1>Mar e Sol Hotel SPA<span class="pull-right">€120 - €500</span></h1>

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-7">
                                                    <div id="carouselExampleIndicators" class="carousel slide"
                                                         data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="2"></li>
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="3"></li>
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="4"></li>
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="5"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="images/1a.jpg"
                                                                     alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/2a.jpg"
                                                                     alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/3a.jpg"
                                                                     alt="Third slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/4a.jpg"
                                                                     alt="Fourth slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/5a.jpg"
                                                                     alt="Fourth slide">
                                                            </div>


                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#carouselExampleIndicators" role="button"
                                                           data-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                  aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#carouselExampleIndicators" role="button"
                                                           data-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                  aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-5">
                                                    <h3>Informações</h3>

                                                    <p>
                                                        - Acessível: Disponiblidade <br>
                                                        - Mínimo de 1 diária <br>
                                                        -Spa <br>
                                                        - Hotel 4 estrelas <br>
                                                        - Acesso à internet <br>
                                                        -Estacionamento
                                                    </p>

                                                    <span class="image main"><img src="images/map.jpg" alt=""/></span>

                                                    <a href="#footer" class="button primary scrolly">Enquiry</a>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <br>

                                        <div class="container-fluid">
                                            <h3>Descrição</h3>

                                            <p>Com vista para o Oceano Atlântico, este hotel descontraído fica a 5
                                                minutos a pé da Praia de São Pedro de Moel, a 8 minutos a pé do Farol do
                                                Penedo da Saudade e a 136 km do Aeroporto de Lisboa.</p>

                                            <p>As comodidades incluem um restaurante com janelas do chão ao teto e vista
                                                para o mar, além de spa, bar e espaço para eventos. Há um terraço na
                                                cobertura com banheira de hidromassagem externa e vista para o mar.</p>

                                            <br>

                                            <h3>Disponibilidade &amp; Preços</h3>

                                            <div class="table-responsive">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                       class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Pacote</th>
                                                        <th>De</th>
                                                        <th>Até</th>
                                                        <th>Preço</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    <tr>
                                                        <td>Natal</td>
                                                        <td>01-11-2020</td>
                                                        <td>27-12-2020</td>
                                                        <td>€ 120 por noite</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Ano Novo</td>
                                                        <td>28-2020</td>
                                                        <td>3-01-2021</td>
                                                        <td>€ 500 por noite</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Janeiro</td>
                                                        <td>4-01-2021</td>
                                                        <td>31-01-2021</td>
                                                        <td>€ 200 por noite</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Love</td>
                                                        <td>01-02-2020</td>
                                                        <td>31-02-2020</td>
                                                        <td>€ 120 por noite</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <br>

                                            <h3>Info</h3>

                                            <ul class="list-group list-group-no-border">
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-3">
                                                            <p class="pjVpProductPolicyTitle">
                                                                <strong>Check-in</strong>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9">
                                                            <p>
                                                                Perguntar pela disponiblidade
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-3">
                                                            <p>
                                                                <strong>Check-out</strong>
                                                            </p>
                                                        </div>

                                                        <div class="col-md-10 col-sm-9">
                                                            <p>
                                                                Perguntar pela disponiblidade
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-3">
                                                            <p>
                                                                <strong>Animais</strong>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9">
                                                            <p>
                                                                Não são permitidos.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!--START SCROLL TOP BUTTON -->
                                <a class="scrollToTop" href="#">
                                    <i class="fa fa-angle-up"></i>
                                </a>
                                <!-- END SCROLL TOP BUTTON -->

                                <!-- Start header section -->

                                <!-- End header section -->


                                <!-- Start slider  -->


                                <!-- Top slider single slide -->


                                <!-- Start Map section -->
                                <section id="mu-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000.777423901426!2d-8.032204094761159!3d39.75953874853054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd220573a3d9b4ed%3A0x96f6ece0849f841f!2sMar%20e%20Sol%20Hotel%20Spa!5e0!3m2!1spt-BR!2spt!4v1605595195729!5m2!1spt-BR!2spt"
                                            width="600" height="450" frameborder="0" style="border:0;"
                                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </section>
                                <!-- End Map section -->
                                <br>


                                <!-- jQuery library -->
                                <script src="assets/js/jquery.min.js"></script>
                                <!-- Include all compiled plugins (below), or include individual files as needed -->
                                <script src="assets/js/bootstrap.js"></script>
                                <!-- Slick slider -->
                                <script type="text/javascript" src="assets/js/slick.js"></script>
                                <!-- Counter -->
                                <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
                                <!-- Gallery Lightbox -->
                                <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
                                <!-- Date Picker -->
                                <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
                                <!-- Ajax contact form  -->
                                <script type="text/javascript" src="assets/js/app.js"></script>

                                <!-- Custom js -->
                                <script src="assets/js/custom.js"></script>


                                <?php
                            }

                            ?>
                            <?php

                            function footerpackd2(){
                            ?>


                            <!-- Footer -->
                            <footer id="footer">
                                <div class="inner">
                                    <section>
                                        <h2>Inquérito</h2>
                                        <form method="post" action="#">
                                            <div class="fields">
                                                <div class="field half">
                                                    <input type="text" name="name" id="name" placeholder="Nome"/>
                                                </div>

                                                <div class="field half">
                                                    <input type="text" name="email" id="email" placeholder="Email"/>
                                                </div>

                                                <div class="field half">
                                                    <input type="text" name="phone" id="phone" placeholder="Telemóvel"/>
                                                </div>

                                                <div class="field quarter">
                                                    <input type="text" placeholder="De 08.07.2020"/>
                                                </div>

                                                <div class="field quarter">
                                                    <input type="text" placeholder="Até 08.07.2020"/>
                                                </div>

                                                <div class="field">
                                                    <textarea name="message" id="message" rows="3"
                                                              placeholder="Mensagem"></textarea>
                                                </div>

                                                <div class="field text-right">
                                                    <label>&nbsp;</label>

                                                    <ul class="actions">
                                                        <li><input type="submit" value="Enviar inquérito"
                                                                   class="primary"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                    <section>
                                        <h2>Contato Info</h2>

                                        <ul class="alt">
                                            <li><span class="fa fa-envelope-o"></span> <a
                                                        href="#">contact@company.com</a></li>
                                            <li><span class="fa fa-phone"></span> +1 333 4040 5566</li>
                                            <li><span class="fa fa-mobile"></span> +1 333 4040 5566</li>
                                            <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC
                                                10001 United States of America
                                            </li>
                                        </ul>
                                    </section>

                                    <ul class="copyright">
                                        <li>Copyright © 2020 Company Name</li>
                                        <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                    </ul>
                                </div>
                            </footer>

                        </div>


                        <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/js/jquery.scrolly.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/main.js"></script>


                        </body>
                        </html>
                        <?php
                        }
                        ?>

                        <?php

                        function toppackdrest(){
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>PHPJabbers.com | Free Travel Website Template</title>
                            <meta charset="utf-8"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
                            <link rel="stylesheet" href="assets_rest/bootstrap/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="assets_rest/bootstrap/css/bootstrap.css"/>

                            <link rel="stylesheet" href="css1/main.css"/>
                            <link rel="stylesheet" href="assets_rest/css/stylemap.css"/>
                            <noscript>
                                <link rel="stylesheet" href="assets_rest/css/noscript.css"/>
                            </noscript>


                            <!-- Prata for body  -->
                            <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
                            <!-- Tangerine for small title -->
                            <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'
                                  type='text/css'>
                            <!-- Open Sans for title -->
                            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'
                                  type='text/css'>


                        </head>
                        <body class="is-preload">
                        <!-- Wrapper -->
                        <div id="wrapper">

                            <!-- Header -->
                            <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                    <a href="HTMLoriginal/index.html" class="logo">
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


                            <?php
                            }
                            ?>
                            <?php

                            function Menupackdrest()
                            {
                                ?>
                                <!-- Menu -->
                                <nav id="menu">
                                    <h2>Menu</h2>
                                    <ul>
                                        <li><a href="HTMLoriginal/index.html">Home</a></li>

                                        <li><a href="HTMLoriginal/packages.html">Alojamento</a></li>
                                        <li><a href="HTMLoriginal/alojamento_reserva.html" class="active">Reserva</a>
                                        </li>
                                        <li><a href="HTMLoriginal/blog.html">Blog</a></li>

                                        <li><a href="ANTIGOS/Ficheiros_antigos/packagesrestaurant.html">Restauração</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown-toggle">Descobrir</a>

                                            <ul>
                                                <li><a href="HTMLoriginal/about.html">Sobre S. Pedro</a></li>
                                                <li><a href="HTMLoriginal/testimonials.html"
                                                       class="active">Avaliações</a></li>
                                                <li><a href="HTMLoriginal/terms.html">Termos</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="HTMLoriginal/contact.html">Contatos</a></li>
                                    </ul>
                                </nav>


                                <?php
                            }

                            ?>
                            <?php

                            function bodypackdrest(){
                            ?>
                            <!-- Main -->
                            <div id="main">
                                <div class="inner">
                                    <h1>Restaurante O Penedo<span class="pull-right">€50 - €200</span></h1>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-7">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                     data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="2"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="3"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="4"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="5"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="images/z1.webp"
                                                                 alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/z2.webp"
                                                                 alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/z3.webp"
                                                                 alt="Third slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/z4.webp"
                                                                 alt="Fourth slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/z5.webp"
                                                                 alt="Fourth slide">
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="images/z6.webp"
                                                                 alt="Fifth slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                       role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                              aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                       role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                              aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5">
                                                <h3>Informações //teste</h3>

                                                <p>
                                                    - Acessível: Disponiblidade <br>
                                                    - Acesso à internet <br>
                                                    - Bar <br>
                                                    -Estacionamento
                                                </p>

                                                <span class="image main"><img src="images/map.jpg" alt=""/></span>

                                                <a href="#footer" class="button primary scrolly">Enquiry</a>
                                            </div>

                                        </div>
                                    </div>

                                    <br>
                                    <br>

                                    <div class="container-fluid">
                                        <h3>Descrição</h3>

                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                        $id = intval($_GET["id"]);
                                        $sql = "select * from estabelecimentos where estabelecimentoId=" . $id;
                                        $resultEstabelecimentos = mysqli_query($con, $sql);
                                        $dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos);


                                        ?>


                                        <?php echo $dadosEstabelecimentos["estabelecimentoDescricao"] ?></
                                    >


                                    <p>Os hóspedes poderão desfrutar de cozinha gourmet no restaurante, enquanto
                                        observam uma variedade de cores no céu durante o pôr-do-sol. O bar propõe um
                                        ambiente relaxante para tomar uma bebida à noite, com televisões de ecrã plano e
                                        cadeiras verdes.</p>

                                    <p>O restaurante O Penedo encontra-se a 1 hora de carro do Aeroporto de Lisboa. A
                                        vila piscatória da Nazaré está a 20 km e o Santuário de Fátima fica a 50 km. A
                                        vila medieval de Óbidos encontra-se a 60 km e as praias de Peniche, com suas
                                        óptimas condições de surf, estão a cerca de 80 km. </p>

                                    <br>
                                    <div class="col-lg-4 col-md-5">
                                        <h3>Informações //teste</h3>

                                        <p>
                                            - Acessível: Disponiblidade <br>
                                            - Acesso à internet <br>
                                            - Bar <br>
                                            -Estacionamento
                                        </p>

                                        <span class="image main"><img src="images/map.jpg" alt=""/></span>

                                        <a href="#footer" class="button primary scrolly">Enquiry</a>
                                    </div>

                                    <h3>Disponibilidade &amp; Preços</h3>

                                    <div class="table-responsive">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                                            <thead>
                                            <tr>
                                                <th>Pacote Menu</th>
                                                <th>De</th>
                                                <th>Até</th>
                                                <th>Preço</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>Natal</td>
                                                <td>01-11-2020</td>
                                                <td>27-12-2020</td>
                                                <td>€ 120</td>
                                            </tr>

                                            <tr>
                                                <td>Ano Novo</td>
                                                <td>28-2020</td>
                                                <td>3-01-2021</td>
                                                <td>€ 200</td>
                                            </tr>

                                            <tr>
                                                <td>Janeiro</td>
                                                <td>4-01-2021</td>
                                                <td>31-01-2021</td>
                                                <td>€ 100</td>
                                            </tr>
                                            <tr>
                                                <td>Romântico</td>
                                                <td>01-02-2020</td>
                                                <td>31-02-2020</td>
                                                <td>€ 150</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <br>

                                    <h3>Info</h3>

                                    <ul class="list-group list-group-no-border">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3">
                                                    <p class="pjVpProductPolicyTitle">
                                                        <strong>Check-in</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-10 col-sm-9">
                                                    <p>
                                                        Perguntar pela disponiblidade.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3">
                                                    <p>
                                                        <strong>Check-out</strong>
                                                    </p>
                                                </div>

                                                <div class="col-md-10 col-sm-9">
                                                    <p>
                                                        Perguntar pela disponiblidade.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3">
                                                    <p>
                                                        <strong>Animais</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-10 col-sm-9">
                                                    <p>
                                                        Permetida ter animais.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>


                                </div>
                            </div>


                            <!--START SCROLL TOP BUTTON -->
                            <a class="scrollToTop" href="#">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <!-- END SCROLL TOP BUTTON -->

                            <!-- Start header section -->

                            <!-- End header section -->


                            <!-- Start slider  -->


                            <!-- Top slider single slide -->


                            <!-- Start Map section -->
                            <section id="mu-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.340411692422!2d-9.027388888116578!3d39.75446477913937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22057614184209%3A0x28b689c316955980!2sAv.%20das%20Piscinas%2026%2C%202430-492%20M.nha%20Grande!5e0!3m2!1spt-BR!2spt!4v1605265482844!5m2!1spt-BR!2spt"
                                        width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>
                            </section>
                            <!-- End Map section -->
                            <br>
                        </div>

                        <br>


                        <?php
                        }
                        ?>
                        <?php

                        function footerpackdrest(){
                        ?>


                        <!-- Footer -->
                        <footer id="footer">
                            <div class="inner">
                                <section>
                                    <h2>Reserva</h2>
                                    <form method="post" action="#">
                                        <div class="fields">
                                            <div class="field half">
                                                <input type="text" name="name" id="name" placeholder="Nome"/>
                                            </div>

                                            <div class="field half">
                                                <input type="text" name="email" id="email" placeholder="Email"/>
                                            </div>

                                            <div class="field half">
                                                <input type="text" name="phone" id="phone" placeholder="Telemóvel"/>
                                            </div>

                                            <div class="field quarter">
                                                <input type="text" placeholder="De 08.07.2020"/>
                                            </div>

                                            <div class="field quarter">
                                                <input type="text" placeholder="Até 08.07.2020"/>
                                            </div>

                                            <div class="field">
                                                <textarea name="message" id="message" rows="3"
                                                          placeholder="Mensagem"></textarea>
                                            </div>

                                            <div class="field text-right">
                                                <label>&nbsp;</label>

                                                <ul class="actions">
                                                    <li><input type="submit" value="Enviar inquérito" class="primary"/>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                                <section>
                                    <h2>Contacto Info</h2>

                                    <ul class="alt">
                                        <li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a>
                                        </li>
                                        <li><span class="fa fa-phone"></span> +1 333 4040 5566</li>
                                        <li><span class="fa fa-mobile"></span> +1 333 4040 5566</li>
                                        <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001
                                            United States of America
                                        </li>
                                    </ul>
                                </section>

                                <ul class="copyright">
                                    <li>Copyright © 2020 Company Name</li>
                                    <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                                </ul>
                            </div>
                        </footer>

                    </div>


                    <!-- Scripts -->
                    <script src="assets_rest/js/jquery.min.js"></script>
                    <script src="assets_rest/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="assets_rest/js/jquery.scrolly.min.js"></script>
                    <script src="assets_rest/js/jquery.scrollex.min.js"></script>
                    <script src="assets_rest/js/main.js"></script>
                    <!-- jQuery library -->
                    <script src="assets_rest/js/jquery.min.js"></script>
                    <!-- Include all compiled plugins (below), or include individual files as needed -->
                    <script src="assets_rest/js/bootstrap.js"></script>
                    <!-- Slick slider -->
                    <script type="text/javascript" src="assets_rest/js/slick.js"></script>
                    <!-- Counter -->
                    <script type="text/javascript" src="assets_rest/js/simple-animated-counter.js"></script>
                    <!-- Gallery Lightbox -->
                    <script type="text/javascript" src="assets_rest/js/jquery.magnific-popup.min.js"></script>
                    <!-- Date Picker -->
                    <script type="text/javascript" src="assets_rest/js/bootstrap-datepicker.js"></script>
                    <!-- Ajax contact form  -->
                    <script type="text/javascript" src="assets_rest/js/app.js"></script>

                    <!-- Custom js -->
                    <script src="assets/js/custom.js"></script>


                    </body>
                    </html>
                    <?php
                    }
                    ?>

                    <?php

                    function bodypackd(){
                    ?>

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");



                    ?>

                    <!-- Main -->
                    <div id="main">
                        <div class="inner">
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                            $id = intval($_GET["id"]);
                            $sql = "select * from estabelecimentos where estabelecimentoId=" . $id;
                            $resultEstabelecimentos = mysqli_query($con, $sql);
                            $dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos);
                            ?>
                            <h1> <?php echo $dadosEstabelecimentos["estabelecimentoNome"] ?> <span class="pull-right">€1094 - €1500</span></h1>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php
                                                $controle_ativo = 2;
                                                $sql = "Select * from imagens where imagemEstabelecimentoId=" . $id;
                                                $resultImagens = mysqli_query($con, $sql);
                                                while ($dadosImagens = mysqli_fetch_array($resultImagens)){ ?>
                                                    <?php
                                                    if ($controle_ativo == 2) { ?>
                                                        <div class="carousel-item active ">
                                                            <img class="d-block w-100 "
                                                                 src=" <?php echo $dadosImagens['imagemNome'] ?>"
                                                                 alt="First slide">
                                                        </div> <?php
                                                        $controle_ativo = 1;
                                                    } else {
                                                        ?>
                                                        <div class="carousel-item ">
                                                        <img class=" d-block w-100"
                                                             src=" <?php echo $dadosImagens['imagemNome'] ?>"
                                                             alt="First slide">
                                                        </div><?php
                                                    }

                                                }
                                                ?>
                                            </div>

                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                               role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                               role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                    </div>


                                </div>
                            </div>

                            <br>
                            <br>

                            <div class="container-fluid">
                                <h3>Descrição</h3>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
                                $id = intval($_GET["id"]);
                                $sql = "select * from estabelecimentos where estabelecimentoId=" . $id;
                                $resultEstabelecimentos = mysqli_query($con, $sql);
                                $dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos);


                                ?>


                                <?php echo $dadosEstabelecimentos["estabelecimentoDescricao"] ?></
                            >


                            <br>


                            <br>
                            <div class="col-lg-4 col-md-5">
                                <h3>Informações //teste</h3>

                                <p>
                                    - Acessível: Disponiblidade <br>
                                    - Mínimo de 2 diárias <br>
                                    - Hidromassagem <br>
                                    - Acesso à internet <br>
                                    - T6 <br>
                                    -Estacionamento
                                </p>

                                <span class="image main"><img src="images/map.jpg" alt=""/></span>

                                <a href="#footer" class="button primary scrolly">Enquiry</a>
                            </div>

                            <h3>Disponibilidade &amp; Preços</h3>

                            <div class="table-responsive">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                                    <thead>
                                    <tr>
                                        <th>Pacote</th>
                                        <th>De</th>
                                        <th>Até</th>
                                        <th>Preço</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Natal</td>
                                        <td>01-11-2020</td>
                                        <td>27-12-2020</td>
                                        <td>€ 1200 por noite</td>
                                    </tr>

                                    <tr>
                                        <td>Ano Novo</td>
                                        <td>28-2020</td>
                                        <td>3-01-2021</td>
                                        <td>€ 1500 por noite</td>
                                    </tr>

                                    <tr>
                                        <td>Janeiro</td>
                                        <td>4-01-2021</td>
                                        <td>31-01-2021</td>
                                        <td>€ 1094 por noite</td>
                                    </tr>
                                    <tr>
                                        <td>Romântico</td>
                                        <td>01-02-2020</td>
                                        <td>31-02-2020</td>
                                        <td>€ 1094 por noite</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <br>

                            <h3>Info</h3>

                            <ul class="list-group list-group-no-border">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-3">
                                            <p class="pjVpProductPolicyTitle">
                                                <strong>Check-in</strong>
                                            </p>
                                        </div>
                                        <div class="col-md-10 col-sm-9">
                                            <p>
                                                Perguntar pela disponiblidade.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-3">
                                            <p>
                                                <strong>Check-out</strong>
                                            </p>
                                        </div>

                                        <div class="col-md-10 col-sm-9">
                                            <p>
                                                Perguntar pela disponiblidade.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-3">
                                            <p>
                                                <strong>Animais</strong>
                                            </p>
                                        </div>
                                        <div class="col-md-10 col-sm-9">
                                            <p>
                                                Permetida ter animais.
                                            </p>
                                        </div>
                                    </div>
                                </li>


                            </ul>


                        </div>
                    </div>


                    <!--START SCROLL TOP BUTTON -->
                    <a class="scrollToTop" href="#">
                        <i class="fa fa-angle-up"></i>
                    </a>
                    <!-- END SCROLL TOP BUTTON -->

                    <!-- Start header section -->

                    <!-- End header section -->


                    <!-- Start slider  -->


                    <!-- Top slider single slide -->


                    <!-- Start Map section -->
                    <section id="mu-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.340411692422!2d-9.027388888116578!3d39.75446477913937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22057614184209%3A0x28b689c316955980!2sAv.%20das%20Piscinas%2026%2C%202430-492%20M.nha%20Grande!5e0!3m2!1spt-BR!2spt!4v1605265482844!5m2!1spt-BR!2spt"
                                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                    </section>
                    <!-- End Map section -->
                    <br>
                </div>

                <br>


                <?php
                }
                ?>






