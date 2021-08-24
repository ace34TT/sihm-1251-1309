<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function loginForm()
    {
        $this->load->helper('url');
        $this->load->view('backend/index');
    }

    public function login()
    {
        $this->load->helper('url');
        $this->load->model('AdminModel');
        $nomUtilisateur = $_POST['nomUtilisateur'];
        $motDepasse = $_POST['motDepasse'];
        $result = $this->AdminModel->login($nomUtilisateur, $motDepasse);
        if (count($result->result()) != 0) {
            $this->load->library('session');
            $_SESSION['user'] = $result->result()[0];
            header('Location: ' . site_url("admin/dashboard"));
        } else {
            echo ("tsy misy");
        }
    }

    public function dashboard()
    {
        $this->load->helper('url');
        $this->load->view('backend/dashboard');
    }
}
