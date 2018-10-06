<?php
    class M_tambah_stok extends CI_Model{
        function proses (){

                    $ukuran = $this->input->post('id_ukuran');
                    $komponen = $this->input->post('id_jenis_komponen');
                    $pendonor = $this->input->post('id_pendonor');
                    $darah = $this->input->post('kode_kantong');
                    $pmi=$this->session->userdata('user_data');
					$data = array(
                        'id_ukuran'=>$ukuran,
                        'id_komponen'=>$komponen,
                        'id_pendonor'=>$pendonor,
                        'id_darah'=>$darah,
                        'id_pmi'=>$pmi


                    );
                    $cek=$this->db->insert('kantong_darah',$data);

	return $cek;
            }//end of simpan
        }
?>
