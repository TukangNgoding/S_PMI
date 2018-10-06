<?php
class M_lihat_data_pendonor extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from pendonor");
        return $query->result();
    }
function edit_pendonor($id_pendonor)
    {
        $query=$this->db->query("SELECT * from pendonor where pendonor.id_pendonor='$id_pendonor'");
        return $query->result();
    }
	

}