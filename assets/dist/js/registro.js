/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function iniciar() {
    $("#formulario").validate({
        rules: {
            InputEmail: {required: true, email: true},
            InputNombre: {required: true, text: true},
            otroAlo: {required: true, text: true},
            inputdate: {required: true, date:true},
            selectHotel: {required: true }},


        messages: {
            InputEmail: {
                email: "<span class='label label-danger'>Debe ingresar un email valido</span>",
                required: "<span class='label label-danger'>Debe ingresar un email</span>"
            },
            InputNombre: {
                text: "<span class='label label-danger'>Debe ingresar un nombre valido</span>",
                required: "<span class='label label-danger'>Debe ingresar un nombre</span>"
            },
            otroAlo: {
                text: "<span class='label label-danger'>Debe ingresar un texto valido</span>",
                required: "<span class='label label-danger'>Debe ingresar un texto</span>"
            },
              inputdate: {
                  date: "<span class='label label-danger'>Debe ingresar una fecha valida</span>",
                required: "<span class='label label-danger'>Debe elegir una fecha de traslado</span>"
            },
            selectHotel:{
                required: "<span class='label label-danger'>Debe seleccionar un Hotel, si no esta en la lista ponga Otro</span>"
            }


        },
        errorPlacement: function (error, element) {

            $("<br>").appendTo(element.parent().find("label"));
            error.appendTo(element.parent().find("label"));

        }
    });

}
;
function execute_my_onreturn(json) {
    debugger;
    if (json.collection_status == 'approved') {
        alert('Pago acreditado, le enviaremos un correo con los datos de su reserva');
        enviarConfirmacion('Pago en Confirmado');
    } else if (json.collection_status == 'pending') {
        alert('El usuario no completó el pago');
    } else if (json.collection_status == 'in_process') {
        alert('El pago está siendo procesado,le enviaremos un correo con los datos \n\
                    de su reserva, cuando el pago se acredite su reserva se confirmara ');
        enviarConfirmacion('Pago en Proceso');
    } else if (json.collection_status == 'rejected') {
        alert('El pago fué rechazado,puede intentar nuevamente el pago');
    } else if (json.collection_status == null) {
        alert('El usuario no completó el proceso de pago, no se ha generado ningúna reserva');
    }


    debugger;
}

function enviarConfirmacion(mensajePago) {
    debugger;
    $.ajax({
        type: "POST",
        url: baseurl + "index.php/email/sendMailGmail",
        dataType: 'json',
        data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
            traslado: $('#nombreTraslado').val(),
            nombre: $('#InputNombre').val(),
            fecha: $('#inputdate').val(),
            email: $('#InputEmail').val(),
            hotel: $('#selectHotel').val(),
            cantpax: $('#inputCantPax').val(),
            estadoPago: mensajePago,
            aclaracion: $('#imputAclaracion').val()
        },
        success: function (res) {
             
        },
        error: function (request, status, error) {
            debugger;
            console.log(error);
        }
    });
}

function enviarConsulta() {
    debugger;
    $.ajax({
        type: "POST",
        url: baseurl + "index.php/email/sendMailGmailConsulta",
        dataType: 'json',
        data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            message: $('#message').val()
        },
        success: function (res) {
            
        },
        error: function (request, status, error) {
            debugger;
            alert('Su consulta no fue enviada, Por favor escribanos a trasladoscataratas@gmail.com')
            console.log(error);
        }
    });
}

$('#link').click(function (e) {

    debugger;
    if ($("#formulario").valid()) {


    } else {
        e.stopImmediatePropagation();
        alert('Debe completar corretamente el formulario');
    }





});
function crearevento() {
    $.ajax({
        type: "POST",
        url: baseurl + "index.php/email/crearEvento",
        dataType: 'json',
        success: function (res) {
            debugger;
        },
        error: function (request, status, error) {
            debugger;
            console.log(error);
        }
    });
}

iniciar();