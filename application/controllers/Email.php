<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function sendMailGmail() {
//cargamos la libreria email de ci
        $this->load->library("email");

        $dataEmail = [
            'traslado' => $this->input->post('traslado'),
            'nombre' => $this->input->post('nombre'),
            'fecha' => $this->input->post('fecha'),
            'email' => $this->input->post('email'),
            'hotel' => $this->input->post('hotel'),
            'cantpax' => $this->input->post('cantpax'),
            'aclaracion' => $this->input->post('aclaracion'),
        ];

//configuracion para gmail
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'trasladoscataratas@gmail.com',
            'smtp_pass' => 'valentino1587',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

//cargamos la configuración para enviar con gmail
        $this->email->initialize($configGmail);

        $this->email->from('facundokpo04@gmail.com');
        $this->email->to("facundokpo04@gmail.com");
        $this->email->subject('Bienvenido/a Traslados cataratas');
        $this->email->message("<p><strong>" . $dataEmail['traslado'] . '</strong><br>Nombre: ' .
                $dataEmail['nombre'] .
                '<br>Correo: ' .
                $dataEmail['email'] .
                '<br>Fecha del traslado: ' .
                $dataEmail['fecha'] .
                '<br>Hotel: ' .
                $dataEmail['hotel'] .
                '<br>' .
                'Cant Pax: ' .
                $dataEmail['cantpax'] .
                '<br>Aclaracion: ' .
                $dataEmail['aclaracion'] .
                "</p>");
        $this->email->send();
//con esto podemos ver el resultado
        echo json_encode($this->email->print_debugger());
    }

    public function crearEvento() {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_url() . 'client_secret.json');
        $CALENDAR_ID = "5854hobqr52bajphtfm78qursc@group.calendar.google.com";
        $client = new Google_Client();
        $client->useApplicationDefaultCredentials();

//        $client->setAuthConfig('client_secret.json');
// Get your credentials from the console
//        $client->setClientId('906721393707-8p60ft8jpf45s5omdgnu6dvlu0i4bf2f.apps.googleusercontent.com');
//        $client->setClientSecret('32273H3WiGMauyEnwsKVknIn');
//        $client->addScope('profile');

        try {
            $service = new Google_Service_Calendar($client);
            $event = new Google_Service_Calendar_Event;
            $event->setSummary('Event nuevo');
            $event->setLocation('en un sitio');
            $start = new Google_Service_Calendar_EventDateTime();
            $start->setDateTime('2014-10-02T19:00:00.000+01:00');
            $start->setTimeZone('Europe/Madrid');
            $event->setStart($start);

            $end = new Google_Service_Calendar_EventDateTime();
            $end->setDateTime('2014-10-02T19:25:00.000+01:00');
            $end->setTimeZone('Europe/Madrid');
            $event->setEnd($end);

            $new_event = null;
            $new_event_id = "";


            $new_event = $service->events->insert($CALENDAR_ID, $event);
        } catch (Google_ClientException $e) {
            echo "Caught Google_ClientException:";
            print_r($e);
        } catch (Google_ServiceException $e) {
            echo "Caught Google_ServiceException:";
            echo "<pre>" . print_r($e, true) . "</pre>";
        }
    }

}
