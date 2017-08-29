<div class="container">
<hr>
<hr>
<hr>
<div class="well">
   
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contacte con Nosotros</h2>
            <h3 class="section-subheading text-muted">Escriba su consulta y nos contactaremos con usted</h3>
        </div>
         <hr>
        <div class="col-sm-12 col-lg-12 col-md-12">
            <form action="javascript:enviarConsulta()" name="sentMessage" id="contactForm" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name */Su Nombre *" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email */Su Email *" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Your Phone */Su Telefono *" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message */Su Mensaje *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<div class="row">
    <div class="map" >
        <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.882976598419!2d-54.57640678454066!3d-25.6088045837063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f69248d19ad53b%3A0x94774b5f2d03eb25!2sAMBAR+HOUSE!5e0!3m2!1ses!2sar!4v1491614503337"
                style="border:0" allowfullscreen></iframe>
    </div>
</div>

</div>

<style>
    .map iframe.googlemaps {
        width: 100%;
        height: 400px;
    }
</style>
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>