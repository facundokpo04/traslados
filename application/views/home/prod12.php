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

        <div class="well">

            <h4><a href="#demo" data-toggle="collapse">Complete el Formulario de Reserva</a>
            </h4>

            <hr>
            <div id="demo" class="collapse">
                <div class="row">

                    <form action="" method="post" id="formulario" name="formulario"  class="form">
                        <input type="hidden" class="form-control" type="date"  id="idTraslado" value="<?php echo $nroTras ? $nroTras : '-1'; ?>" >
                        <input type="hidden" class="form-control" type="date"  id="nombreTraslado" value="<?php echo $preference_data['items'][0]['title']; ?>" >
                        <div  class="form-group">
                            <label  for="InputEmail">Email address/Direccion de Correo</label>
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail">

                        </div>
                        <div c class="form-group">
                            <label for="InputNombre">Nombre Completo</label>
                            <input type="text" class="form-control" id="InputNombre" name="InputNombre">
                        </div>

                        <div class="form-group">
                            <label for="inputdate" class="col-2 col-form-label">Fecha Reserva/Date</label>

                            <div class="col-10">
                                 <input type="date" name="inputdate" id="inputdate" min="<?php echo date("Y-m-d",strtotime ( '+2 day' , strtotime ( date("Y-m-d") ) )); ?>" max="2019-12-31" value="<?php echo date("Y-m-d",strtotime ( '+2 day' , strtotime ( date("Y-m-d") ) )); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Hotel/Hospedaje</label>
                            <select class="form-control" id="selectHotel" name="selectHotel" onchange="this.value == 'otro' ? document.getElementById('otroAlo').value = '' : document.getElementById('otroAlo').value = this.value">
                                <option value="">Seleccione un Hotel...</option>
                                <option value="El guembe">El guembe</option>
                                <option value="Lodge de la Selva">Lodge de la Selva</option>
                                <option value="otro">Otro</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox" onclick="document.getElementById('otroAlo').disabled = !this.checked;document.getElementById('selectHotel').disabled = this.checked;document.getElementById('selectHotel').value = 'otro'">Otro Alojamiento</label>
                        </div> 
                        <div class="form-group" >
                            <label for="exampleTextarea">donde va alojarse?</label>
                            <textarea class="form-control" name="otroAlo" id="otroAlo" rows="3" disabled></textarea>
                        </div>   
                        <div class="form-group">
                            <label for="exampleSelect2">Cantidad de Pasajeros</label>
                            <select  class="form-control" id="inputCantPax">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="form-group">

                            <label for="exampleTextarea">Alguna Aclaracion</label>
                            <textarea class="form-control" id="imputAclaracion" rows="3" ></textarea>
                        </div>                                  

                    </form>
                    <div class="row">
                        <p><a id="link" href="<?php echo $preference['response']['init_point']; ?>"   name="MP-Checkout" class="lightblue-M-Ov-ArOn" mp-mode="modal"  onreturn="execute_my_onreturn">Pagar</a>
<!--                            <button type="button" onclick="enviarConfirmacion('Pago aprobado')">prueba email</button>-->
                            <a href="<?php echo base_url(); ?>index.php/Home" class="btn btn-default" role="button">Volver Atras</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
