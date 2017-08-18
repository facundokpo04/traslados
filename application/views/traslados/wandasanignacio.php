<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Minas de Wanda + San Ignacio Mini",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 10.00
        )
    )
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference = $mp->create_preference($preference_data);
?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado15/t15det.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$ 4000.00</h2>
                <h2><a href="#">Traslado Minas de Wanda + San Ignacio Mini</a>

                </h2>
                <p>
                    Realizamos Servicios de traslado a las <b>Minas de Wanda</b>
                </p>
                <p>Encuentro con el chofer en la recepción del hotel para luego recorrer 45 km. Hasta llegar a la Mina. </p>
                <p>Salimos desde el hotel en vehículos confortables en dirección a las <b>MINAS DE WANDA</b> a 45 km. donde haremos un paseo con un Guía que les ira mostrando las instalaciones, 
                    luego retomamos viaje hacia las <b>RUINAS DE SAN IGNACIO</b> a 200km. donde haremos un paseo con un Guía que les ira contando la historia del lugar.<br>

                    Finalizada la visita se regresa  al Hotel.
                </p>
                <h5>Informacion Importante Minas de Wandas: </h5> 
                <ul>
                    <li><strong><span>Entrada General Minas de Wanda: $ 60,00 (Pesos por persona)</span></strong></li> 

                    <li><strong><span>Duracion: de 07:30 hs a 19:30 hs </span></strong></li>                              

                </ul>
                <h5>Informacion Importante Ruinas  de San Ignacio Mini: </h5> 
                <ul>
                    <li><strong><span>Entrada General Extranjeros: $ 150,00 (Pesos por persona)</span></strong></li> 
                    <li><strong><span>Entrada General Latinoamericanos: $ 130,00 (Pesos por persona)</span></strong></li> 
                    <li><strong><span>Entrada General Argentinos: $ 100,00 (Pesos por persona)</span></strong></li> 
                    <li><strong><span>Entrada General Jubilados: $ 50,00 (Pesos por persona)</span></strong></li> 
                    <li><strong><span>Entrada General Menores de 6 años: sin cargo</span></strong></li> 

                    <li><strong><span>Duracion: de 07:30 hs a 19:30 hs </span></strong></li>                              

                </ul>

                <p> * Ingresos no estan incluidos en el traslado. <br>
                    * El almuerzo no esta incluido.<br>
                    * Para obtener los diferentes descuentos es necesario presentar D.N.I.                </p>



                <button type="button" class="btn btn-success" onclick="window.open('http://www.misionesturismo.com.ar/sanignacio/ruinas.htm')">San Igancio Mini</button>

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
