<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProduitModel extends CI_Model
{

    private $tableName = 'produits';

    public function insert($data)
    {
        $this->load->helper('url');
        $this->db->insert($this->tableName, $data);
    }

    public function getAll()
    {
        $query = $this->db->get($this->tableName);
        return $query->result();
    }

    public function delete($id)
    {
        $this->db->delete($this->tableName, array('id' => $id));
    }
}
