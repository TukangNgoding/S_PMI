<?php
    class M_tambah_ukuran extends CI_Model{    
        function proses (){
                    $id_ukuran = $this->input->post('id_ukuran');
                    $ukuran = $this->input->post('ukuran');
                    $harga = $this->input->post('harga');

                    
					$data = array(
                        'id_ukuran'=>$id_ukuran,
                        'ukuran'=>$ukuran,
                        'harga'=>$harga,
                            
  				 
                    );
                    $cek=$this->db->insert('ukuran',$data);
                   
					return $cek;					
        }
		function hapus ($id){
          $query=$this->db->where('id_ukuran', $id);
          $cek=$this->db->delete('ukuran');

           if($cek==true){
            return true;
          }else{
            return false;
          }
            }
			
			//end of simpan        
        }
?>
