<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __CONSTRUCT() {
        parent::__construct();
        //cargar el modelo

        $this->load->library('Mercadopago');
        $this->load->helper('url');
        $this->load->model('Entradas_model');
    }

    public function view($page = 'home') {

        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if ($page === 'infoutil') {
            $ultimosArticulos = $data['news_articulos'] = $this->Entradas_model->get_articulos();
            $this->load->view('layout/header');
            $this->load->view('pages/infoutil', $data);
            $this->load->view('layout/footer');
        } else if ($page === 'about') {
            
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('layout/header');
              $this->load->view('layout/slider');
            $this->load->view('pages/' . $page);
            $this->load->view('layout/footer');
        } else {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('layout/header');
            $this->load->view('pages/' . $page);
            $this->load->view('layout/footer');
        }
    }

}
