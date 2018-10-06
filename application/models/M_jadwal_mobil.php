<?php
    class M_jadwal_mobil extends CI_Model{    
        function proses (){
                    $id = $this->input->post('id');
                    $tgl_update = $this->input->post('tgl_post');
                    $waktu = $this->input->post('waktu');
                    $alamat = $this->input->post('alamat');

                    
					$data = array(
                        'id'=>$id,
                        'tgl_update'=>$tgl_update,
                        'waktu'=>$waktu,
                        'alamat'=>$alamat,
                            
  				 
                    );
                    $cek=$this->db->insert('jadwal_mobil',$data);
                   
	return $cek;					
            }
			//end of simpan    
		function hapus ($id){
          $query=$this->db->where('id', $id);
          $cek=$this->db->delete('jadwal_mobil');

           if($cek==true){
            return true;
          }else{
            return false;
          }
            }
			
        }
?>
