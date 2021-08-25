<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caisse extends CI_Controller
{
    public function form()
    {
        $this->load->helper('url');
        $listeCaisse = $this->getAll();
        $data = array(
            "listeCaisse" => $listeCaisse
        );
        $this->load->view('backend/caisse/form', $data);
    }

    public function insert()
    {
        $this->load->helper('url');
        $this->load->model('CaisseModel');
        $this->CaisseModel->insert();
        header('Location: ' . site_url("admin/caisse/form"));
    }

    public function getAll()
    {
        $this->load->model('CaisseModel');
        $resultat = $this->CaisseModel->getAll();
        return $resultat;
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('CaisseModel');
        $this->CategorieModel->delete($id);
        header('Location: ' . site_url("admin/caisse/form"));
    }
}
