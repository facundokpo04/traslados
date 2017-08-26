<?php

class Entradas_model extends CI_Model {

    function get_articulos() {
        $query = $this->db->get('entrada');
        return $query->result_array();
    }

    function get_excursiones() {
        $query = $this->db->get('excursion');
        return $query->result_array();
    }

    function get_articulo($id) {
        $this->db->where('id', $id);

        $query = $this->db->get('entrada');
        return $query->result_array();
    }

}
