<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Cataratas Argentina",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 1.00
        )
    ),
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference = $mp->create_preference($preference_data);
?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado1/1g.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$ 700.00</h2>
                <h2><a href="#">Traslado Cataratas Argentina</a>

                </h2>
                <p>
                    Realizamos Servicios de traslado hasta el <b>Parque Nacional Iguazu.</b>
                </p>
                <p>Los traslados se pueden realizar desde el<strong> Aeropuerto Iguazú</strong> directamente hacia las <strong>Cataratas Argentina </strong>. Puede contratar también los servicios desde cualquier <strong>Hotel</strong> que estén Ubicado tanto en <strong>Argentina como en Brasil.</strong></p>
                <p>Una vez que coordinamos los horarios, pasamos a buscarlos por el lugar donde estén hospedados y los trasladamos hasta el parque.</p>
                <p>Luego se coordina el horario para pasar a buscarlos o pueden llamarnos cuando quieran realizar el regreso</p>
                <h5>Ingreso al Parque Nacional: </h5> 
                <ul>
                    <li><strong><span>Entrada General: $ 500,00 (pesos por persona)</span></strong></li>  
                    <li><strong><span>Mercosur (BRA, PAR, URU): $ 400,00 (pesos por persona)</span></strong></li> 
                    <li><strong><span>Residentes argentinos: $ 260,00 (pesos por persona)</span></strong></li> 
                    <li><strong><span>Menores (entre 6 y 12 años)  - Entrada general: $  130,00 (pesos por persona)</span></strong></li> 
                    <li><strong><span>Menores (entre 6 y 12 años)  - Mercosur: $  100,00 (pesos por persona)</span></strong></li>                       <li><strong><span>Menores (entre 6 y 12 años)  - Residentes argentinos: $  80,00 (pesos por persona)</span></strong></li>                    

                </ul>
                <p> * Ingresos al <b>Parque Nacional</b> no estan incluidos en el traslado. <br>
                    * Se puede abonar únicamente en pesos y en efectivo. <br>
                    * Para obtener los diferentes descuentos es necesario presentar D.N.I.                </p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Mapa Integrado</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Tarifas 2017</button>

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
                        <img src="<?php echo base_url(); ?>assets/images/mapacataratas.jpg"  class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="<?php echo base_url(); ?>assets/images/tarifas2017.jpg"  class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <style>
            .btn-link{
                border:none;
                outline:none;
                background:none;
                cursor:pointer;
                color:#0000EE;
                padding:0;
                text-decoration:underline;
                font-family:inherit;
                font-size:inherit;
            }
        </style>

        <?php
        $this->load->view('home/formulario.php', [
            'preference' => $preference,
            'preference_data' => $preference_data
        ]);
        ?>


