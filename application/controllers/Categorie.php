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
        $this->load->model('CategorieModel');
        $data['nom'] = $_POST['nom'];
        $this->CategorieModel->insert($data);
    }

    public function getAll()
    {
        $this->load->model('CategorieModel');
        $resultat = $this->CategorieModel->getAll();
        return $resultat;
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
    }
}
