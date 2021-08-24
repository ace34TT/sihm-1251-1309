<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function dashboard()
    {
        $this->load->view('backend/dashboard');
    }
}
