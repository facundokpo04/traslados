<?php
$preference_data = array(
	"items" => array(
		array(
			"title" => "Traslado Aeropuerto",
			"quantity" => 1,
			"currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
			"unit_price" => 10.00
		)
	)
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference =  $mp->create_preference($preference_data);

?>
  
<div class="row">
   <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/trasladocataratas2.jpg" alt="">
            <div class="caption-full">
                <h4 class="pull-right">$450.00</h4>
                <h4><a href="#">Traslado Al Aeropuerto</a>
                </h4>
                <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                <p>Want to make these reviews work? Check out
                    <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                    </strong>over at maxoffsky.com!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="ratings">
                <p class="pull-right">3 reviews</p>
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

        <div class="well">

            <h4><a href="#demo" data-toggle="collapse">Complete el Formulario de Reserva</a>
            </h4>

            <hr>
            <div id="demo" class="collapse">
                <div class="row">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address/Direccion de Correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nombre Completo</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre Completo">
                        </div>
                        <div class="form-group">
                            <label for="example-date-input" class="col-2 col-form-label">Fecha Reserva/Date</label>
                            <div class="col-10">
                                <input class="form-control" type="date"  id="example-date-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Hotel/Hospedaje</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>El guembe</option>
                                <option>Lodge de la Selva</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Cantidad de Pasajeros</label>
                            <select multiple class="form-control" id="exampleSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Alguna Aclaracion</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>                                  
                        <!--            <button type="submit" class="btn btn-primary">Submit</button>-->
                    </form>

                </div>
                <div class="row">
                   <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=19504483-4f9b933e-f74b-4371-993d-599844e7a449" name="MP-payButton" class='blue-ar-m-rn-arall'>Pagar</a>
                    <p><a href="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" class="lightblue-M-Ov-ArOn" mp-mode="modal">Pagar</a> <a href="#" class="btn btn-default" role="button">Volver Atras</a></p>
                </div>
            </div>
        </div>
     </div>
</div>

