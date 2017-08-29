<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Aeropuerto Brasil IN",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 700.00
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
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado6/t6det.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$700.00</h2>
                <h2><a href="#">Traslado Aeropuerto Brasil IN</a>
                    
                    
                </h2>
                <p>
                    Este traslado incluye viaje  desde el aeropuerto de Brasil a su Hotel u otro punto de la ciudad de Puerto Iguazu. </p>
                      <p> Nostros lo esperaremos en el Aeropuerto, con un cartel con su nombre. </p>
                      <p>Una vez reservado el traslado nosostros nos comunicaremos con usted para que nos facilita el <strong>Numero de Vuelo</strong> y la <strong>Hora de Arribo</strong> para evitar cualquier contratiempo. </p>
                    
                    
                </p>
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
   </div>
     <?php
        $this->load->view('home/formulario.php', [
            'preference' => $preference,
            'preference_data' => $preference_data
        ]);
        ?>
