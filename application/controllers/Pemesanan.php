<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

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
			 $this->load->model('M_pemesanan');
    }

	function proses_pemesanan(){

			$cek=$this->M_pemesanan->tambah();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('pemesanan/status_permintaan_darah');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('permintaan_darah');
			}

		}
		function proses_hapus_rs(){
			$id=$_GET['id'];
			$this->load->model('M_tambah_rs');
			$cek=$this->M_tambah_rs->hapus($id);
			if($cek){
				$data2="<script> alert('Data Berhasil di hapus')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('pemesanan/status_permintaan_darah');
			}else{
				$data2="<script> alert('Hapus Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('permintaan_darah');
			}

		}

		public function status_permintaan_darah()
		{
			$data['permintaan'] = $this->M_pemesanan->status();
			$this->load->view('status_permintaan_darah',$data);
		}
		public function data_permintaan()
		{
			$data['permintaan'] = $this->M_pemesanan->data_permintaan();
			$this->load->view('data_permintaan_darah',$data);
		}
		public function detail_permintaan()
		{
			$id=$_GET['id'];
			$data['permintaan'] = $this->M_pemesanan->permintaan($id);
			$data['pesan'] = $this->M_pemesanan->pesan($id);
			$this->load->view('detail_permintaan',$data);
		}

}
