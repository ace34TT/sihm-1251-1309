<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
    public function loginForm()
    {
        $this->load->helper('url');
        $this->load->view('backend/index');
    }

    public function login()
    {
        $this->load->model('AdminModel');
        $nomUtilisateur = $_POST['nomUtilisateur'];
        $motDepasse = $_POST['motDepasse'];
        $result = $this->AdminModel->login($nomUtilisateur, $motDepasse);
        if (count($result->result()) != 0) {
            $this->load->library('session');
            $_SESSION['user'] = $result->result()[0];
        } else {
            echo ("tsy misy");
        }
    }
}
