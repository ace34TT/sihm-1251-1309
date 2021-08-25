<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CaisseModel extends CI_Model
{
    private $tableName = 'caisses';

    public function insert()
    {
        $this->load->helper('url');
        $this->db->insert($this->tableName, array('id' => null));
    }

    public function getAll()
    {
        $query = $this->db->get($this->tableName);
        return $query->result();
    }

    public function delete($id)
    {
        echo ($id);
        $this->db->delete($this->tableName, array('id' => $id));
    }
}
