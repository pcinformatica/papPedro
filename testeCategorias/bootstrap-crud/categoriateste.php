<?php

function table(){
    ?>
    <?php
    $con=mysqli_connect("localhost","root","","pap2021saopedro");
    $sql="select * from categorias";
    $result=mysqli_query($con,$sql);



    ?>


    <div id="main" class="container-fluid" style="margin-top: 50px">

        <div id="top" class="row">
            <div class="col-sm-3">
                <h2></h2>
            </div>
            <div class="col-sm-6">

                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Categorias">
                    <span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
                </div>

            </div>
            <div class="col-sm-3">
                <a href="add.php" class="btn btn-primary pull-right h2">Nova Categoria</a>
            </div>
        </div> <!-- /#top -->



        <div id="list" class="row">

            <div class="table-responsive col-md-12">
                echo"<table class="table table-striped" cellspacing="0" cellpadding="0">";
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da categoria</th>
                        <th>Estado</th>
                        <th>Data</th>
                        <th class="actions">Ações</th>
                    </tr>
                    </thead>
                    <tbody>

                    while ($dados=mysqli_fetch_array($result)){

                    }
                    <tr>
                        <td>1001</td>
                        <td></td>
                        <td>Ativo</td>
                        <td>01/01/2015</td>
                        <td class="actions">
                            <a class="btn btn-success btn-xs" href="view.php">Visualizar</a>
                            <a class="btn btn-warning btn-xs" href="edit.php">Editar</a>
                            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>HOMEMOEL</td>
                        <td>Desativado</td>
                        <td>01/01/2015</td>
                        <td class="actions">
                            <a class="btn btn-success btn-xs" href="view.php">Visualizar</a>
                            <a class="btn btn-warning btn-xs" href="edit.php">Editar</a>
                            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div> <!-- /#list -->

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
    </div> <!-- /#main -->

    <!-- Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir este item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
    <?php
}
?>
