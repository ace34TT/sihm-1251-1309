<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Facture extends CI_Controller
{
    public function form()
    {
        $this->load->helper('url');
        $listeFacture = $this->getAll();
        $data = array(
            "listeFacture" => $listeFacture
        );
        $this->load->view('backend/facture/form', $data);
    }

    public function insert($data)
    {
        $this->load->helper('url');
        $this->load->model('FactureModel');
        $this->FactureModel->insert($data);
        header('Location: ' . site_url("admin/facture/form"));
    }

    public function getAll()
    {
        $this->load->model('FactureModel');
        $resultat = $this->FactureModel->getAll();
        return $resultat;
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('FactureModel');
        $this->FactureModel->delete($id);
        header('Location: ' . site_url("admin/facture/form"));
    }
}
