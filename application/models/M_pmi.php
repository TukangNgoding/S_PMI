<?php
class M_pmi extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `user` WHERE level='2'");
        return $query->result();
    }
    function lihat_pmi($id)
    {
        $query=$this->db->query("SELECT * FROM `user` WHERE id_pmi='$id'");
        return $query->result();
    }


}
