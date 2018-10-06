<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darah extends CI_Controller {

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
			$this->load->model('M_lihat_data_stok');
			$this->load->model('M_lihat_data_komponen');
			$this->load->model('M_pmi');
    }
	public function lihat_stok_darah()
	{
		$data['data'] = $this->M_pmi->lihat();
		$this->load->view('stok_darah_pmi',$data);
	}
	public function stok_darah_pmi()
	{
		$id=$_GET['id'];
		$data['pmi'] = $this->M_pmi->lihat_pmi($id);
		$data['stok'] = $this->M_lihat_data_stok->stok($id);
		$this->load->view('lihat_stok_darah',$data);
	}
	public function detail()
	{
		$gol_darah=$_GET['gol_darah'];
		$id=$_GET['id'];
		$data['komponen'] = $this->M_lihat_data_stok->komponen(	$id,$gol_darah);
		$data['data_komponen1'] = $this->M_lihat_data_komponen->get_user_all();
		$this->load->view('detail_darah',$data);
	}

	public function permintaan_darah()
	{
		$data['pmi'] = $this->M_pmi->lihat();
		$this->load->view('permintaan_darah',$data);
	}

	public function tambah_stok()
	{
		$this->load->model('M_lihat_data_ukuran');
		$data['data_ukuran1'] = $this->M_lihat_data_ukuran->get_user_all();
		$this->load->model('M_lihat_data_komponen');
		$data['data_komponen1'] = $this->M_lihat_data_komponen->get_user_all();
		$this->load->model('M_lihat_data_pendonor');
		$data['pendonor'] = $this->M_lihat_data_pendonor->get_user_all();
		$this->load->model('M_lihat_data_stok');
		$data['stok'] = $this->M_lihat_data_stok->data();
		$this->load->view('tambah_stok', $data);
	}
	function proses_tambah_stok(){
			$this->load->model('M_tambah_stok');
			$cek=$this->M_tambah_stok->proses();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('darah//tambah_stok');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('darah/tambah_stok');
			}

		}

}
