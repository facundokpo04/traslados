<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Represa Itaipu Binacional",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 650.00
        )
    )
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference = $mp->create_preference($preference_data);
echo $nroTras;
?>
<div class="container">
<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado11/t11det.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$ 650.00</h2>
                <h2><a href="#">Traslado Represa Itaipu Binacional</a>

                </h2>
                <p>
                    Realizamos Servicios de traslado ida y vuelta a la <b>Rrepesa de Itaipu.</b>
                </p>
                <p>Nuestro servicio incluye el traslado a la represa itaipu ida y vuelta</p>
                <h5>Valor del los Ingresos: </h5> 
               
                    <ul>
                        <li><strong><span>Entrada General: R$ 36,00 (reales por persona)</span></strong></li>  

                        <li><strong><span>Menores (entre 7 y 12 años)  - Entrada general: R$  16,00 (reales por persona)</span></strong></li> 
                        <li><strong><span>Menores (entre 0 y 6 años)  Gratis </span></strong></li>                       <li><strong><span>Menores (entre 6 y 12 años)  - Residentes argentinos: $  80,00 (pesos por persona)</span></strong></li>                    

                    </ul>

                <h5>Informacion Importante: </h5> 
                
                    <ul>
                        <li><strong><span>Duracion: 2h. aprox</span></strong></li>  



                    </ul>

               
                <p> * Ingresos a la <b>Represa Itaipu</b> no estan incluidos en el traslado. <br>
                    * Se puede abonar únicamente . <br>
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
        
        </div>
     <?php
        $this->load->view('home/formulario.php', [
            'preference' => $preference,
            'preference_data' => $preference_data
        ]);
        ?>
