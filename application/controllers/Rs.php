<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rs extends CI_Controller {

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
	public function index()
	{
		$this->load->view('profil_rs');
	}
	public function tambah_rs()
	{
	$this->load->model('M_tambah_rs');
			$this->load->model('M_lihat_data_rs');
			$data['data_rs1'] = $this->M_lihat_data_rs->get_user_all();
			
		$this->load->view('tambah_rs', $data);
	}
	function proses_tambah_rs(){ 
			$this->load->model('M_tambah_rs');
			$cek=$this->M_tambah_rs->proses();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('rs/tambah_rs');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('rs/tambah_rs');
			}

		}
		function proses_hapus_rs(){ 
		$id=$_GET['id'];
			$this->load->model('M_tambah_rs');
			$cek=$this->M_tambah_rs->hapus($id);
			if($cek){
				$data2="<script> alert('Data Berhasil di hapus')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('rs/tambah_rs');
			}else{
				$data2="<script> alert('Hapus Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('rs/tambah_rs');
			}

		}
	
}


