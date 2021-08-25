<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produit extends CI_Controller
{
    public function form()
    {
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('CategorieModel');
        $listeProduit = $this->getAll();
        $listeCategorie = $this->CategorieModel->getAll();

        $data = array(
            "listeProduit" => $listeProduit,
            "listeCategorie" => $listeCategorie
        );
        $this->load->view('backend/produit/form', $data);
    }

    public function insert()
    {
        $this->load->helper('url');
        $this->load->helper('asset_helper');
        $this->load->model('ProduitModel');
        $data['nom'] = $_POST['nom'];
        $data['idCategorie'] = $_POST['idCategorie'];
        $data['prixUnitaire'] = $_POST['prixUnitaire'];

        // $this->ProduitModel->insert($data);

        echo (base_url() . 'assets/products/');

        $config = array(
            'upload_path' => base_url() . 'assets/products/',
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'encrypt_name' => TRUE,
            'file_name' => $data['nom'],
            'max_size' => "2048000",
            'max_height' => "768",
            'max_width' => "1024"
        );

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            $data = array('upload_data' => $this->upload->data());
            echo ("tafiditra");
        } else {
            $error = array('error' => $this->upload->display_errors('picture'));
            echo '<pre>', var_dump($error), '</pre>';
        }
        // header('Location: ' . site_url("admin/produit/form"));
    }

    public function getAll()
    {
        $this->load->model('ProduitModel');
        $resultat = $this->ProduitModel->getAll();
        return $resultat;
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('ProduitModel');
        $this->ProduitModel->delete($id);
        header('Location: ' . site_url("admin/produit/form"));
    }
}
