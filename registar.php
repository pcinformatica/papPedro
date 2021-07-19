<?php
include_once("includes/body.inc.php");
include_once("includes/functions.php");
$con = mysqli_connect("localhost", "root", "", "pap2021saopedro");
$sql="Select * from users";
$res=mysqli_query($con,$sql);

topind();

?>
    <section>
        <div class="container">
            <a href="index.php"> <h8>Voltar</h8></a>
            <div class="text-center">
                <h1>Registar</h1>
                <p class="lead">Crie uma conta e comece a fazer as suas reservas!</p>
            </div>
        </div>
    </section>



    <div class="container">

        <form action="confirmaRegistar.php" method="post">
            <div class="container">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputName">Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" >E-mail</label>
                        <input type="email" class="form-control"  placeholder="nome@exemplo.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="InputTelephone" >Telemovel</label>
                        <input type="text" class="form-control"  name="telemovel">
                    </div>
                    <div class="form-group">
                        <label for="InputTelephone" >Morada</label>
                        <input type="text" class="form-control"  name="morada">
                    </div>
                    <div class="form-group">
                        <label for="InputTelephone" >Nome de utilizador</label>
                        <input type="text" class="form-control" placeholder=""  name="login">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Palavra-passe</label>
                        <input type="password" class="form-control"  name="password">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Confirme a palavra-passe</label>
                        <input type="password" class="form-control"  name="password2">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="Submit" style="background-color: #00feff" class="w-25" value="Registar">
                </div>
            </div>
            <a href="login.php"> <h8>Já tem conta? Faça login.</h8></a>
        </form>
    </div>

<?php
footerind();
?>