<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __CONSTRUCT() {
        parent::__construct();
        //cargar el modelo

        $this->load->library('Mercadopago');
        $this->load->helper('url');
    }

    public function view($page = 'home') {

        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('layout/header');
        $this->load->view('pages/' . $page);
        $this->load->view('layout/footer');
    }

}
