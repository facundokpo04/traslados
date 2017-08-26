<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Compras Ciudad del Este",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 750.00
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
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado10/t10det.png" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$ 750.00</h2>
                <h2><a href="#">Compras Ciudad Del Este</a>

                </h2>
                <p>
                    Realizamos Servicios de tour de compras en <b>Ciudad del Este.</b>
                </p>
                <p>Nuestro servicio incluye el traslado desde su Hotel en puerto Iguazu hasta Ciudad del este, consiste en un recorrido guiado (si usted lo desea) por el chofer,</p>
                <p>Nuestro servicio incluye 3 hs de espera ciudad del este, para que usted pueda comprar con tranquilidad.</p>
                <h5>Informacion Importante: </h5> 
                <ul>
                    <li><strong><span>Podemos aconsejarles comercios, que venden sus productos con garantías de reparación por fallas.</span></strong></li>  
                    <li><strong><span>Debe tener en cuenta que en los horarios picos,  se congestiona el transito sobre el  Puente Internacional de la Amistad</span></strong></li> 


                </ul>
                 <h5>Donde Comprar: </h5> 
                    <ul>
                    <li><strong><span>Básicamente tenés 2 opciones que son: Los Shoppings o locales sobre la calle. Cada uno tiene sus ventajas y desventajas que vamos a aclarar. Debés tener en cuenta que existe gran variedad y que te van a ofrecer de todo para que compres mientras caminas por Ciudad del Este.</span></strong></li>  
                    <li><strong><span>En los shoppings vas a encontrar un ambiente más tranquilo que podés caminar y ver sin problemas. Los precios también son muy convenientes y además es más seguro comprar con tarjetas.</span></strong></li> 
                    <li><strong><span>Además ya que son lugares establecidos ofrecen garantía y podés cambiar tu producto en caso de alguna falla.</span></strong></li> 


                </ul>



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
