<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Minas de Wanda",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 650.00
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
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado13/t13det.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$ 650.00</h2>
                <h2><a href="#">Traslado Minas de Wanda</a>

                </h2>
                <p>
                    Realizamos Servicios de traslado a las <b>Minas de Wanda</b>
                </p>
                <p>Encuentro con el chofer en la recepción del hotel para luego recorrer 45 km. Hasta llegar a la Mina. </p>
                <p>Conocida especialmente por sus yacimientos de piedras semipreciosas, turquesas, amatistas y cristal de roca, <b>las Minas de Wanda fueron localizadas en 1976</b>,
                    y desde entonces pasaron a ser una excursión obligada. En su interior se originan ágatas, jaspes, topacios, entre otras variedades,
                    y pueden ser adquiridas por los turistas que se acercan a conocer este apasionante lugar. Las piedras extraídas de las minas son 
                    convertidas en gemas y utilizadas para la realización de joyería. En consonancia con esto, y según relata la leyenda, este sitio de 
                    gran importancia turística debe su nombre a una princesa polaca que fue muy afecta a la belleza de las piedras que allí se generan.
                    Durante la visita guiada se podrá conocer la Mina desde su interior, el proceso de elaboración, podrán ver los diferentes productos finalizados y adquirir recuerdos.
                </p>
                <h5>Informacion Importante: </h5> 
                <ul>
                    <li><strong><span>Entrada General: $ 60,00 (Pesos por persona)</span></strong></li>  
                    <li><strong><span>Duracion: 3hs. Aproximadamente</span></strong></li>                              

                </ul>
                
                <p> * Ingresos no estan incluidos en el traslado. <br>
                    * Se puede abonar unicamente con pesos y en efectivo. <br>
                    * Para obtener los diferentes descuentos es necesario presentar D.N.I.                </p>

 

                <button type="button" class="btn btn-success" onclick="window.open('http://www.ciaminerawanda.com.ar/')">Minas de Wanda</button>

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

   </div>

   </div>


     <?php
        $this->load->view('home/formulario.php', [
            'preference' => $preference,
            'preference_data' => $preference_data
        ]);
        ?>
