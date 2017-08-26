<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Represa Itaipu Binacional + Cataratas Brasil",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 1300.00
        )
    )
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference = $mp->create_preference($preference_data);
echo $nroTras;
?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado9/t9det.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$ 1300.00</h2>
                <h2><a href="#">Traslado Represa Itaipu Binacional + Cataratas de Brasil</a>

                </h2>
                <p>
                    Realizamos Servicios de traslado  a las <b>Cataratas de Brasil.</b> visitando la  <b>Represa Binacional de Itaipu</b>
                </p>
                <p>Los traslados se pueden realizar  desde cualquier <strong>Hotel</strong> que estén Ubicado tanto en <strong>Argentina como en Brasil.</strong></p>
                <p>Una vez que coordinamos los horarios, pasamos a buscarlos por el lugar donde estén hospedados y los trasladamos hasta las Cataratas Brasileras, haciendo una visitra previa por la Represa de Itaipu</p>
                <p>Luego se coordina el horario para pasar a buscarlos o pueden llamarnos cuando quieran realizar el regreso</p>
                <h5>Ingreso al Parque Nacional: </h5> 
                <ul>
                    <li><strong><span>Entrada General: R$ 65,00 (reales por persona)</span></strong></li>  
                    <li><strong><span>Mercosur (BRA, PAR, URU): R$ 52,00 (reales por persona)</span></strong></li> 
                    <li><strong><span>Menores (entre 2 y 11 años):R$10 (reales por persona)</span></strong></li>                              

                </ul>
                <h5>Valor del los Ingresos Represa de Itaipu: </h5> 
              
                    <ul>
                        <li><strong><span>Entrada General: R$ 36,00 (reales por persona)</span></strong></li>  

                        <li><strong><span>Menores (entre 7 y 12 años)  - Entrada general: R$  16,00 (reales por persona)</span></strong></li> 
                        <li><strong><span>Menores (entre 0 y 6 años)  Gratis </span></strong></li>                       <li><strong><span>Menores (entre 6 y 12 años)  - Residentes argentinos: $  80,00 (pesos por persona)</span></strong></li>                    

                    </ul>

               
                <h5>Informacion Importante: </h5> 
                <ul>
                    <li><strong><span>Horario de Visita: 9h. a 17h.</span></strong></li>  

                </ul>
                <h5>Informacion Importante: </h5> 

                <p> * Ingresos  no estan incluidos en el traslado. <br>

                    * Para obtener los diferentes descuentos es necesario presentar D.N.I.                </p>



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


     <?php
        $this->load->view('home/formulario.php', [
            'preference' => $preference,
            'preference_data' => $preference_data
        ]);
        ?>
