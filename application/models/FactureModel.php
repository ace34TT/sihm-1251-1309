<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class FactureModel extends CI_Model
{
    private $tableName = 'factures';

    public function insert($data)
    {
        $this->db->insert($this->tableName, $data);
        return $this->db->insert_id();
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
