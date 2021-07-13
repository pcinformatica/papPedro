<?php
include_once('includes\functions.php');
topalres();
Menualres();

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
include_once('includes\functions.php');

footeralres();
?>