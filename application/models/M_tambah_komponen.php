<?php
    class M_tambah_komponen extends CI_Model{    
        function proses (){
                    $nama = $this->input->post('nama');

                    
					$data = array(
                        'nama'=>$nama
                            
  				 
                    );
                    $cek=$this->db->insert('komponen',$data);
                   
					return $cek;					
        }
		function hapus ($id){
          $query=$this->db->where('id_komponen', $id);
          $cek=$this->db->delete('komponen');

           if($cek==true){
            return true;
          }else{
            return false;
          }
            }//end of simpan        
        }
?>
