<?php
class M_lihat_data_stok extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from bidan left JOIN desa on desa.id_desa=bidan.id_desa left JOIN kecamatan on kecamatan.id_kecamatan=bidan.id_kecamatan left JOIN kabkota on kabkota.id_kabkota=bidan.id_kabkota left JOIN provinsi on provinsi.id_provinsi = bidan.id_provinsi where bidan.id_bidan='$id'");
        return $query->result();
    }
    function data()
    {
        $pmi=$this->session->userdata('user_data');
        $query=$this->db->query("SELECT *, komponen.nama as nama_komponen, pendonor.nama as nama_pendonor  from kantong_darah left join pendonor on pendonor.id_pendonor=kantong_darah.id_pendonor left join ukuran on ukuran.id_ukuran=kantong_darah.id_ukuran left join komponen on komponen.id_komponen=kantong_darah.id_komponen where kantong_darah.id_pmi='$pmi'");
        return $query->result();
    }
    function stok($id)
    {
        $query=$this->db->query("SELECT pendonor.gol_darah , COUNT(kantong_darah.id_darah)as stok from kantong_darah left join pendonor on pendonor.id_pendonor=kantong_darah.id_pendonor left join ukuran on ukuran.id_ukuran=kantong_darah.id_ukuran left join komponen on komponen.id_komponen=kantong_darah.id_komponen left join user on user.id_pmi=kantong_darah.id_pmi where user.id_pmi='$id' GROUP by pendonor.gol_darah");
        return $query->result();
    }
    function komponen($id,$gol_darah)
    {
        $query=$this->db->query("SELECT komponen.id_komponen, COUNT(kantong_darah.id_darah)as jumlah from komponen right JOIN kantong_darah on kantong_darah.id_komponen=komponen.id_komponen left join pendonor on pendonor.id_pendonor=kantong_darah.id_pendonor left join user on kantong_darah.id_pmi=user.id_pmi WHERE pendonor.gol_darah='$gol_darah' and kantong_darah.id_pmi='$id' GROUP by komponen.id_komponen");
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
