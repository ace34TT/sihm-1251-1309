<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorie extends CI_Controller
{
    public function form()
    {
        
        $this->load->helper('url');
        $this->load->view('backend/categorie/form');
    }

    public function insert($data)
    {
        $this->db->insert('categories', $data);
    }
}
