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
        $this->load->view('frontend/selectionProduits');
    }

    public function listProduit()
    {
        $this->load->view('listeProduits');
    }

    public function produits()
    {
        $this->load->library('session');
        $this->load->helper('url');
        $idProduits = $_POST['productsId'];
        $this->spliteIds($idProduits);
    }

    private function spliteIds($ids)
    {
        $retour = explode(",", $ids);
        return array_pop($retour);
    }

    public function test()
    {
        echo ("hello");
    }
}
