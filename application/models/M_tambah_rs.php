<?php
    class M_tambah_rs extends CI_Model{    
        function proses (){
                    $id = $this->input->post('id');
                    $nama = $this->input->post('nama');
                    $no_hp = $this->input->post('no_hp');
                    $alamat = $this->input->post('alamat');
                    $type = $this->input->post('type');
                    $email = $this->input->post('email');
                    $password = $this->input->post('password');
                    $password=md5($password);
					
					$data = array(
                       'id_rs'=>$id,
                        'nm_rs'=>$nama,
                        'no_hp'=>$no_hp,
                        'alamat'=>$alamat,
                        'type'=>$type,
                        'email'=>$email,
                        'password'=>$password,
                            
  				 
                    );
                    $cek=$this->db->insert('rs',$data);
                   
					return $cek;					
            }//end of simpan        
        
		function hapus ($id){
          $query=$this->db->where('id_rs', $id);
          $cek=$this->db->delete('rs');

           if($cek==true){
            return true;
          }else{
            return false;
          }
            }
		
		}
?>
