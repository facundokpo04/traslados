<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __CONSTRUCT() {
        parent::__construct();
        //cargar el modelo

        $this->load->library('Mercadopago');
        $this->load->model('Entradas_model');
    }

    public function index() {

        //header
        $this->load->view('layout/header');
        $this->load->view('layout/slider');
//        $this->load->view('layout/menu');
        //definimos variable para traer la data y mantner la logica de paginacion
        //inicializacion de paginacion
        $data['excursiones'] = $this->Entradas_model->get_excursiones();

        $this->load->view('home/index.php',$data);

        //footer
        $this->load->view('layout/footer');
    }

    public function traslado($i) {

        //header


        $this->load->view('layout/header');
//        $this->load->view('layout/menu');
        //definimos variable para traer la data y mantner la logica de paginacion
        //inicializacion de paginacion


        
        $this->load->view('traslados/' . $i . '.php', [
            'nroTras' => $i
        ]);

//        $this->load->view('home/formulario.php');
        //footer
        $this->load->view('layout/footer');
    }

    public function registrarTraslado() {
        
    }

}
