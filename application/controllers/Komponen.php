<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komponen extends CI_Controller {

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
		$this->load->helper('url');
			$this->load->model('M_tambah_komponen');
			$this->load->model('M_lihat_data_komponen');
			$data['data_komponen1'] = $this->M_lihat_data_komponen->get_user_all();
			
			$this->load->view('tambah_komponen', $data);
	}
	function proses_tambah_komponen(){ 
			$this->load->model('M_tambah_komponen');
			$cek=$this->M_tambah_komponen->proses();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('komponen');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('komponen');
			}

		}
		function proses_hapus_komponen(){ 
		$id=$_GET['id'];
			$this->load->model('M_tambah_komponen');
			$cek=$this->M_tambah_komponen->hapus($id);
			if($cek){
				$data2="<script> alert('Data Berhasil di hapus')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('komponen');
			}else{
				$data2="<script> alert('Hapus Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('komponen');
			}

		}
}


