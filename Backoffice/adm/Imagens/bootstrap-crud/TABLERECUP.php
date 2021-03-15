<?php

function table(){
?>
<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$sql="select * from categorias";
$result=mysqli_query($con,$sql);

?>


   <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
    <a href="#" class="btn btn-primary pull-right h2">Nova Categoria</a>
    </div>





   <table class="table table-striped">";
      <thead>
        <tr>
            <th scope="col"></th>
          <th scope="col">ID</th>
          <th scope="col">Nome da Categoria</th>

          <th scope="col" class="actions">Ações</th>
        </tr>
      </thead>

      <tbody>

        <?php
        while ($dados=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo " <td></td>";
            echo "<td>".$dados['categoriaId']."</td>";
            echo "<td>".$dados['categoriaNome']."</td>";



           echo "<td class= 'actions' >";

                  echo  "<a class='btn btn-success btn-xs' href=\"editacategoria.php?id=".$dados["categoriaId"]."\"><i class='fa fa-eye'></i> Visualizar</a>";

                  echo  " <a class='btn btn-warning btn-xs  justify-content-md-end' data-toggle='modal' data-target='#exampleModal2' ><i class='fa fa-pencil'></i>Editar</a>";

                  echo  "  <a class='btn btn-danger btn-xs'  onclick=\"confirmaElimina(".$dados['categoriaId'].");\"><i class='fa fa-trash'></i>Excluir</a>";
            echo "   </td>";
           echo "</tr>";
        }
    ?>
      </tbody>
    </table>
    <script>
        function confirmaElimina(id) {
            if(confirm('Confirma que deseja eliminar o registo?'))
                window.location="../bootstrap-crud/eliminaCategoria.php?id=" + id;
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
                    echo " enctype='multipart/form-data'>";


                       echo" <label>Nome: </label>";
                      echo"  <input type=\"text\" name=\"nomeCategoria\"><br>";
                         ?>
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
