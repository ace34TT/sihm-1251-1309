<?php
defined('BASEPATH') or exit('No direct script access allowed');

class utilisateur extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('frontend/index');
    }

    public function caisse($caisse)
    {
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['idCaisse'] = $caisse;
        //get caisse avec id $caisse
        $this->load->model('ProduitModel');
        $listeProduit = $this->ProduitModel->getAll();
        $data = array(
            "listeProduit" => $listeProduit
        );
        $this->load->view('frontend/selectionProduits', $data);
    }

    public function listeProduit()
    {
        $this->load->helper('url');
        $this->load->view('frontend/listeProduits');
    }

    public function produitSelectionne()
    {
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('ProduitModel');
        $idProduits = $_POST['productsId'];
        $ids = $this->spliteIds($idProduits);

        for ($i = 0; $i < count($ids) - 1; $i++) {
            $resultat[$i] = $this->ProduitModel->getById($ids[$i]);
        };
        // echo '<pre>', var_dump($resultat), '</pre>';
        $data = array(
            'produitSelectionnee' => $resultat
        );
        $this->load->view('frontend/achatProduit.php', $data);
    }

    private function spliteIds($ids)
    {
        $retour = explode(",", $ids);
        return $retour;
    }

    public function validerAchat()
    {
        $idsQnt = $_POST['id_qnt'];
        $idQttArray = $this->spliteIdQtt($idsQnt);
        $i = 0;
        foreach ($idQttArray as $idQtt) {
            $idQnt[$i] = explode('@', $idQtt);
            $i++;
        }

        $this->load->model('FactureModel');
        $this->load->model('AchatProduitModel');
        $this->load->library('session');

        $data = array(
            'idCaisse' => $_SESSION['idCaisse'],
            'dateFacture' => date("Y/m/d")
        );

        $factureId = $this->FactureModel->insert($data);

        for ($i = 0; $i < count($idQnt) - 1; $i++) {
            $data = array(
                "idProduit" => $idQnt[$i][0],
                "idFacture" => $factureId,
                "quantite" =>  $idQnt[$i][1]
            );
            $this->AchatProduitModel->insert($data);
        }

        header('Location: ' . site_url("utilisateur/listeProduit"));
    }
    private function spliteIdQtt($idQtt)
    {
        $retour = explode('/', $idQtt);
        return $retour;
    }

    public function produitParCategorie()
    {
        $this->load->helper('url');
        $this->load->model('ProduitModel');
        $this->load->model('CategorieModel');
        $data = array(
            'listeProduit' => $this->ProduitModel->getAll(),
            'listeCategorie' => $this->CategorieModel->getAll()
        );
        $this->load->view('frontend/produitsParCategorie', $data);
    }
}
