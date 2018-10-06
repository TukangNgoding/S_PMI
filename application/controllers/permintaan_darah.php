<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan_darah extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct() {
				 parent::__construct();
				$this->load->library('session');
		
		 }
	public function add_darah()
	{
		$this->load->model('M_permintaan_darah');
		$id_pesan=$_GET['id_pesan'];
		$id_permintaan=$_GET['id_permintaan'];
		$cek=$this->M_permintaan_darah->add_darah($id_pesan);
		if($cek){
			$data2="<script> alert('Data Berhasil di Input')</script>";
			$this->session->set_flashdata('pesan', $data2);
			redirect('pemesanan/detail_permintaan?id='.$id_permintaan);
		}else{
			$data2="<script> alert('Input Data Gagal')</script>";
			$this->session->set_flashdata('pesan', $data2);
			redirect('pemesanan/detail_permintaan?id='.$id_permintaan);
		}
	}

}
