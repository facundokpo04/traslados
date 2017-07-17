<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __CONSTRUCT() {
        parent::__construct();
        //cargar el modelo
    }

    public function index() {

        //header
        $this->load->view('layout/header');
        $this->load->view('layout/slider');
        $this->load->view('layout/menu');
        //definimos variable para traer la data y mantner la logica de paginacion
        //inicializacion de paginacion


    $this->load->view('home/index.php');

        //footer
        $this->load->view('layout/footer');
    }

    
     public function prod() {

        //header
        $this->load->view('layout/header');
       $this->load->view('layout/menu');
        //definimos variable para traer la data y mantner la logica de paginacion
        //inicializacion de paginacion


        $this->load->view('home/prod.php');

        //footer
        $this->load->view('layout/footer');
    }
}
