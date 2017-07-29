<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Traslados extends CI_Controller {

    public function __CONSTRUCT() {
        parent::__construct();
        //cargar el modelo      
    }

    public function index() {

        //header
        $this->load->view('layout/header');
//        $this->load->view('layout/slider');
        //definimos variable para traer la data y mantner la logica de paginacion
        //inicializacion de paginacion


        $this->load->view('traslados/index.php');

        //footer
        $this->load->view('layout/footer');
    }

   

}
