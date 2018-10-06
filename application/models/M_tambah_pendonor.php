<?php
    class M_tambah_pendonor extends CI_Model{    
        function proses (){
                    $id = $this->input->post('id_pendonor');
                    $nama = $this->input->post('nama');
                    $no_hp = $this->input->post('no_hp');
                    $alamat = $this->input->post('alamat');
                    $gol_darah = $this->input->post('gol_darah');
                    $nik = $this->input->post('nik');
                    $pekerjaan = $this->input->post('pekerjaan');
                    $j_kelamin = $this->input->post('j_kelamin');

                    
					$data = array(
                        'id_pendonor'=>$id,
                        'nama'=>$nama,
                        'no_hp'=>$no_hp,
                        'alamat'=>$alamat,
                        'gol_darah'=>$gol_darah,
                        'nik'=>$nik,
                        'pekerjaan'=>$pekerjaan,
                        'j_kelamin'=>$j_kelamin,
                            
  				 
                    );
                    $cek=$this->db->insert('pendonor',$data);
                   
	return $cek;					
            }//end of simpan        
        
		function hapus ($id){
          $query=$this->db->where('id_pendonor', $id);
          $cek=$this->db->delete('pendonor');

           if($cek==true){
            return true;
          }else{
            return false;
          }
            }
		
		}
?>
