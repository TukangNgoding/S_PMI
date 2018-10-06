<?php
class M_lihat_data_rs extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from rs");
        return $query->result();
    }
/*	function edit_bidan($id)
    {
        $query=$this->db->query("SELECT * from bidan left JOIN desa on desa.id_desa=bidan.id_desa left JOIN kecamatan on kecamatan.id_kecamatan=bidan.id_kecamatan left JOIN kabkota on kabkota.id_kabkota=bidan.id_kabkota left JOIN provinsi on provinsi.id_provinsi = bidan.id_provinsi where bidan.id_bidan='$id'");
        return $query->result();
    }
	function detail_bidan($id)
    {
        $query=$this->db->query("SELECT * from bidan left JOIN desa on desa.id_desa=bidan.id_desa left JOIN kecamatan on kecamatan.id_kecamatan=bidan.id_kecamatan left JOIN kabkota on kabkota.id_kabkota=bidan.id_kabkota left JOIN provinsi on provinsi.id_provinsi = bidan.id_provinsi where bidan.id_bidan='$id'");
        return $query->result();
    }
*/	

}