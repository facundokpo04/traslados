<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Compras Ciudad del Este",
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
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado10/t10det.png" alt="">
            <div class="caption-full">
                <h3 class="pull-right">$ 800.00</h3>
                <h3><a href="#">Compras Ciudad Del Este</a>

                </h3>
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
                                <input type="date" name="inputdate" id="inputdate" min="<?php echo date("Y-m-d"); ?>" max="2019-12-31" value="<?php echo date("Y-m-d"); ?>">
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




