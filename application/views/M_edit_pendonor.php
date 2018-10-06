<?php
    class M_edit_pendonor extends CI_Model{    
        function update($new_name,$id){
                    $id_pendonor = $this->input->post('id_pendonor');
                    $nama = $this->input->post('nama');
                    $alamat = $this->input->post('alamat');
                    $no_hp = $this->input->post('no_hp');
                    $gol_darah = $this->input->post('gol_darah');
                    $nik= $this->input->post('nik');
                    $pekerjaan = $this->input->post('pekerjaan');
                    $j_kelamin = $this->input->post('j_kelamin');
                    
					$data = array(
                        'id_pendonor'=>$id_pendonor,
                        'nama'=>$nama,
                        'alamat'=>$alamat,
                        'no_hp'=>$no_hp,
                        'gol_darah'=>$gol_darah,
                        'nik'=>$nik,
                        'pekerjaan'=>$pekerjaan,
                        'j_kelamin'=>$j_kelamin,
                       );                
                    );
                   	$this->db->where('id_pendonor',$id_pendonor);
					$cek=$this->db->update('pendonor',$data); 		
					return $cek;					
            }//end of simpan     
      
        }
?>