<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AchatProduit extends CI_Controller
{

    public function form()
    {
        $this->load->helper('url');
        $listeAchatProduit = $this->getAll();
        $data = array(
            "listeAchatProduit" => $listeAchatProduit
        );

        $this->load->view('backend/achatProduit', $data);
    }

    public function insert()
    {
        $this->load->helper('url');
        $this->load->model('AchatProduitModel');
        $data['nom'] = $_POST['nom'];
        $this->AchatProduitModel->insert($data);
        header('Location: ' . site_url("admin/achatProduit/form"));
    }

    public function getAll()
    {
        $this->load->model('AchatProduitModel');
        $resultat = $this->AchatProduitModel->getAll();
        return $resultat;
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('AchatProduitModel');
        $this->AchatProduitModel->delete($id);
        header('Location: ' . site_url("admin/achatProduit/form"));
    }
}
