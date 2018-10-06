<?php
    class M_permintaan_darah extends CI_Model{
        function add_darah ($id_pesan){
          $id_darah=$_POST['kantong_darah'];
          $data = array(
           'id_darah'=>$id_darah

            );
          $this->db->where('id_pesan',$id_pesan);
          $cek=$this->db->update('pesan',$data);
          return $cek;
            }//end of simpan
        }
?>
