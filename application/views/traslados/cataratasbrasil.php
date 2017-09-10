<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Cataratas Brasil",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 800.00
        )
    )
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference = $mp->create_preference($preference_data);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12">
            <div class="thumbnail">
                <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado9/t9det.jpg" alt="">
                <div class="caption-full">
                    <h2 class="pull-right">$ 800.00</h2>
                    <h2><a href="#">Traslado Cataratas Brasil</a>

                    </h2>
                    <p>
                        Realizamos Servicios de traslado las <b>Cataratas de Brasil.</b>
                    </p>
                    <p>Los traslados se pueden realizar  desde cualquier <strong>Hotel</strong> que estén Ubicado tanto en <strong>Argentina como en Brasil.</strong></p>
                    <p>Una vez que coordinamos los horarios, pasamos a buscarlos por el lugar donde estén hospedados y los trasladamos hasta las Cataratas Brasileras.</p>
                    <p>Luego se coordina el horario para pasar a buscarlos o pueden llamarnos cuando quieran realizar el regreso</p>
                    <h5>Ingreso al Parque Nacional: </h5> 
                    <ul>
                        <li><strong><span>Entrada General: R$ 65,00 (reales por persona)</span></strong></li>  
                        <li><strong><span>Mercosur (BRA, PAR, URU): R$ 52,00 (reales por persona)</span></strong></li> 
                        <li><strong><span>Menores (entre 2 y 11 años):R$10 (reales por persona)</span></strong></li>                              

                    </ul>
                    <h5>Informacion Importante: </h5> 
                    <ul>
                        <li><strong><span>Horario de Visita: 9h. a 17h.</span></strong></li>  

                    </ul>
                    <p> * Ingresos a las <b>Cataratas Brasileras</b> no estan incluidos en el traslado. <br>
                        * Se puede abonar con tarjeta y en efectivo con reales. <br>
                        * Para obtener los diferentes descuentos es necesario presentar D.N.I.                </p>

                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Mapa Integrado</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Tarifas 2017</button>

                    <button type="button" class="btn btn-success" onclick="window.open('https://tickets.cataratasdoiguacu.com.br/')">Comprar Ingreso Online</button>

                </div>
                <div class="ratings">
                    <p class="pull-right">3 Opiniones</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        4.0 Extrellas
                    </p>
                </div>

            </div>




            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="<?php echo base_url(); ?>assets/images/traslado9/t7mapacataratasbr.jpg"  class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="<?php echo base_url(); ?>assets/images/traslado9/t7tarifas.jpg"  class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <?php
        $this->load->view('home/formulario.php', [
            'preference' => $preference,
            'preference_data' => $preference_data
        ]);
        ?>
        <div class="panel panel-default">
            <h4 style="text-align: center"><a href="#">Dejamos tu comentario</a></h4>
            <div class="fb-comments" data-href="https://www.facebook.com/trasladoscataratas" data-numposts="5"></div>

        </div>
    </div>
