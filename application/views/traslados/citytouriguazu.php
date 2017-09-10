<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado City Tour Puerto Iguazu",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 450.00
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
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado5/t5d.jpg" alt="">
            <div class="caption-full">
                <h2 class="pull-right">$ 450.00</h2>
                <h2><a href="#">City Tour Puerto Iguazu</a>

                </h2>
                <p>
                    Realizamos Servicios de tour por la ciudad de puerto Iguazu Visitando <b>tres lugares de interes. </b>
                </p>
                <h4><strong>Hito Tres Fronteras y Costanera Eduardo Arrabal</strong></h4>
                <p>Punto panorámico, ubicado a pocas cuadras del centro de la ciudad, es el punto más alto de la barranca, este
                    obelisco fue inaugurado en 1903, marca el límite territorial entre Argentina, Brasil y Paraguay. Se encuentra
                    emplazado en la confluencia de los ríos Paraná e Iguazú. Allí también funciona una feria de artesanías.
                    Lugo de visitar el Hito de las Tres Fronteras podrá visitar la costanera y el Puerto que está a pocas cuadras.</p>
                <h5>Informacion Importante: </h5> 
                <ul>
                    <li><strong><span>Valor de Ingreso: Gratis</span></strong></li>  
                    <li><strong><span>Duracion: 45 min</span></strong></li> 
                </ul>
                <h4><strong>La Aripuca</strong></h4>
                <p>La Aripuca es el nombre de una trampa de caza de los pueblos guaraníes. Es también un complejo eco-turístico
                    construido con el diseño de dicha trampa realizado con más de 30 especies y 500 toneladas de arboles
                    rescatados del comercio ilegal. Este emprendimiento busca enseñarnos de los que nos estamos perdiendo al
                    entrar en contacto con árboles centenarios.</p>
                <h5>Informacion Importante: </h5> 
                <ul>
                    <li><strong><span>Valor de Ingreso: $110 P/Persona</span></strong></li> 
                    <li><strong><span>Menores de 8 años no pagan</span></strong></li> 
                    <li><strong><span>Horario de Visita: de 09:00 hs. 18:00 hs.</span></strong></li>  
                    <li><strong><span>Duracion: 1 hora</span></strong></li> 
                </ul>
                <h4><strong>Dutty Free Shop</strong></h4>
                <p>El Duty Free Shop Iguazú es un mercado libre de impuestos en la ciudad de Puerto Iguazú
                    en el cual se pueden encontrar ofertas en productos de electrónica, perfumería y cosmética, relojes, 
                    tabaco, juguetes y otros recuerdos.</p>
                <h5>Informacion Importante: </h5> 
                <ul>
                    <li><strong><span>Valor de Ingreso: Gratis</span></strong></li> 
                    <li><strong><span>Horario de Visita: de 09:00 hs. 21:00 hs.</span></strong></li>  
                    <li><strong><span>Duracion: 2 horas</span></strong></li> 
                </ul>
                
                <p> * Ingresos al no estan incluidos en el traslado. <br>
                    * Se puede abonar los ingresos únicamente en pesos y en efectivo. <br> </p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Mapa Ciudad</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Mapa Aripuca</button>
                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Ubicacion</button>
                    <button type="button" class="btn btn-success" onclick="window.open('http://www.dutyfreeshoppuertoiguazu.com/catalogo/catalogo.html')">Catalogo Free Shop</button>

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
                <img src="<?php echo base_url(); ?>assets/images/traslado5/t5maps.jpg"  class="img-responsive">
            </div>
        </div>
    </div>
</div>
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img  src="<?php echo base_url(); ?>assets/images/traslado5/t5maps2.jpg" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<div id="myModal3" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img  src="<?php echo base_url(); ?>assets/images/traslado5/t5ubicacion.gif" class="img-responsive">
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
</div>