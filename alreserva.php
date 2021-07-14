<div class="d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#exampleModal">
    <a href="#" class="btn btn-primary pull-right h2">Nova notícia</a>

</div>
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
                echo "<form action=\"../adm/confirmaNovaNoticia.php\" method=\"post\" enctype='multipart/form-data'>";



                echo" <label>Nome: </label>";
                echo"  <input type=\"text\" name=\"nomeCategoria1\"><br>";




                ?>








                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Data</label>
                    <div class="col-10">
                        <input class="form-control" type="date"  name="Data" value="2011-08-19" id="example-date-input">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-time-input" class="col-2 col-form-label">Hora</label>
                    <div class="col-10">
                        <input class="form-control" type="time" name="Hora" value="13:45:00" id="example-time-input">
                    </div>
                </div>
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