<?php

class AdminModel extends CI_Model
{
    public function login($nomUtilisateur, $motDePasse)
    {
        $query = $this->db->get_where('admins', array('nomUtilisateur' => $nomUtilisateur, 'motDepasse' => sha1($motDePasse)));
        return $query;
    }
}
