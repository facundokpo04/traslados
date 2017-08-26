<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Centro de Foz",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 400.00
        )
    )
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference = $mp->create_preference($preference_data);
?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado8/t8det.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$400.00</h2>
                <h2><a href="#">Traslado Centro de Foz</a>


                </h2>
                <p>
                    Este traslado incluye el viajes desde su Hotel en Puerto Iguazu a cualquier punto de la ciudad de Foz de Iguazu. </p>

                <h5><strong>Puente de la Amistad</strong></h5>
                <p>El Puente de la Amistad cruza el río Paraná y conecta la ciudad brasileña de Foz do Iguaçu con Ciudad del Este, Lugar de interes
                    para hacer compras del lado brasilero en su mayoria de opciones son ropa y calzados.</p>
                <h5><strong>Cataratas JL Shopping</strong></h5>
                <p>Cataratas JL Shopping es el primer centro comercial de Foz de Iguazú. Este centro comercial es el principal paseo de compras de la ciudad recibiendo más de un millón y medio de visitantes al año</p>
                <h5><strong>Templo Budista</strong></h5>
                <p>Admira la arquitectura asiática y encuentra cientos de estatuas talladas. Relájate en el jardín mientras contemplas la 
                    excelente vista de la ciudad y del río.</p>
                <ul>
                    <li><strong><span>Valor de Ingreso: Gratis</span></strong></li>   
                </ul>
                <h5><strong>Shopping Catuaí Palladium</strong></h5>
                <p>Un shopping muy grande, con variedad de casas de comida rapidas, especialidades y al peso. Tiene juegos para niños,
                    grandes tiendas, y el lugar ideal para los que se hospedan cerca y con niños.</p>
                <h5><strong>Zoológico Bosque Guaraní en Foz de Iguazú</strong></h5>
                <p>El Zoológico Bosque Guarani fue inaugurado El 10 de junio de 1996 y constituye un ejemplo de recuperación de un área que se encontraba degradada, que fuera transformada en una zona para esparcimiento, educación ambiental y turismo. Situado en un bosque nativo de cuatro hectáreas, 
                    el establecimiento se ubica en la zona central de la ciudad de Foz de Iguazú.</p>
                 <ul>
                    <li><strong><span>Valor de Ingreso: Gratis</span></strong></li>   
                </ul>
                 <h5><strong>Marco Das Tres Fronteira</strong></h5>
                <p>En el Lugar de las Tres Fronteras, que está en Foz do Iguaçu, podrás pararte en el punto donde se unen Argentina, Brasil y Paraguay. 
                    Conforme el río Iguazú fluye desde las Cataratas de Iguazú, éste se une al río Paraná para 
                    formar uno de los únicos lugares en el mundo donde dos ríos crean una frontera entre tres naciones.</p>
                 <ul>
                    <li><strong><span>Valor de Ingreso: R$ 19 </span></strong></li> 
                     <li><strong><span>Valor de Ingreso(6 a 11 años): R$ 12 </span></strong></li>  
                </ul>
            </div>
            <div class="ratings">
                <p class="pull-right">3 Comentarios</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    4.0 stars
                </p>
            </div>

        </div>

     <?php
        $this->load->view('home/formulario.php', [
            'preference' => $preference,
            'preference_data' => $preference_data
        ]);
        ?>
