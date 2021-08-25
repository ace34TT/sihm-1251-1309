<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorie extends CI_Controller
{

    public function form()
    {
        $this->load->helper('url');
        $listeCategorie = $this->getAll();
        $data = array(
            "listeCategorie" => $listeCategorie
        );

        $this->load->view('backend/categorie/form', $data);
    }

    public function insert()
    {
        $this->load->helper('url');
        $this->load->model('CategorieModel');
        $data['nom'] = $_POST['nom'];
        $this->CategorieModel->insert($data);
        header('Location: ' . site_url("admin/categorie/form"));
    }

    public function getAll()
    {
        $this->load->model('CategorieModel');
        $resultat = $this->CategorieModel->getAll();
        return $resultat;
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('CategorieModel');
        $this->CategorieModel->delete($id);
        header('Location: ' . site_url("admin/categorie/form"));
    }
}
