<div class="well">

    <h4><a href="#demo" data-toggle="collapse">Complete el Formulario de Reserva</a>
    </h4>

    <hr>

    <div id="demo" class="collapse">

        <div class="row">

            <form action="" method="post" id="formulario" name="formulario"  class="form">
                <input type="hidden" class="form-control" type="text"  id="idTraslado" value="<?php echo $nroTras ? $nroTras : '-1'; ?>" >
                <input type="hidden" class="form-control" type="text"  id="nombreTraslado" value="<?php echo $preference_data['items'][0]['title']; ?>" >
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
                        <input type="date" name="inputdate" id="inputdate" min="<?php echo date("Y-m-d", strtotime('+2 day', strtotime(date("Y-m-d")))); ?>" max="2019-12-31" value="<?php echo date("Y-m-d", strtotime('+2 day', strtotime(date("Y-m-d")))); ?>">
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


        </div>
        <div class="row">
            <p><a id="link" href="<?php echo $preference['response']['init_point']; ?>"   name="MP-Checkout" class="lightblue-M-Ov-ArOn" mp-mode="modal" onclick="window.scrollTo(0, 0)" onreturn="execute_my_onreturn">Pagar</a>
                <!--                            <button type="button" onclick="enviarConfirmacion('Pago aprobado')">prueba email</button>-->
                <a href="<?php echo base_url(); ?>index.php/Home" class="btn btn-default" role="button">Volver Atras</a></p>
        </div>

    </div>

</div>





<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
