<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Model
{
    public  function getCategoriescqscsqc()
    {
        $row = array();
        $query = $this->db->query('select * from Categories ');
        foreach ($query->result_array() as $row) {
            $row['id'];
            $row['nom'];
        }
        return $query->result_array();
    }
}