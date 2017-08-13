<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Represa Itaipu Binacional + Cataratas Brasil",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 10.00
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
                <h2 class="pull-right">$ 1200.00</h2>
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

