<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function home()
	{
		$this->load->view('home');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function user()
	{
		$this->load->view('tambah_user');
	}
	
	public function donasi()
	{
		$this->load->view('donasi');
	}
	public function pengolahan_darah()
	{
		$this->load->view('pengolahan_darah');
	}
	public function pengujian_darah()
	{
		$this->load->view('pengujian_darah');
	}
	public function penyimpanan_darah()
	{
		$this->load->view('penyimpanan_darah');
	}
	public function distribusi_darah()
	{
		$this->load->view('distribusi_darah');
	}
	public function serba_serbi()
	{
		$this->load->view('serba_serbi');
	}
	public function lihat_jadwal_mobil()
	{
	$this->load->helper('url');
			$this->load->model('M_jadwal_mobil');
			$this->load->model('M_lihat_data_mobil');
			$data['data_mobil1'] = $this->M_lihat_data_mobil->get_user_all();
		$this->load->view('lihat_jadwal_mobil', $data);
		
	}
	
	public function tambah_jadwal_mobil() {
			$this->load->helper('url');
			$this->load->model('M_jadwal_mobil');
			$this->load->model('M_lihat_data_mobil');
			$data1['data_mobil'] = $this->M_lihat_data_mobil->get_user_all();
			$this->load->view('tambah_jadwal_mobil',$data1);
	}
	function proses_tambah_jadwal_mobil(){ 
			$this->load->model('M_jadwal_mobil');
			$cek=$this->M_jadwal_mobil->proses();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('lihat_jadwal_mobil');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('tambah_jadwal_mobil');
			}

		}
		function proses_hapus_jadwal_mobil(){ 
		$id=$_GET['id'];
			$this->load->model('M_jadwal_mobil');
			$cek=$this->M_jadwal_mobil->hapus($id);
			if($cek){
				$data2="<script> alert('Data Berhasil di hapus')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('lihat_jadwal_mobil');
			}else{
				$data2="<script> alert('Hapus Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('lihat_jadwal_mobil');
			}

		}

	public function tambah_pendonor()
	{
		$this->load->helper('url');
			$this->load->model('M_lihat_data_pendonor');
			$data['data_pendonor'] = $this->M_lihat_data_pendonor->get_user_all();
		$this->load->view('tambah_pendonor', $data);
		
	
	}
		
	function proses_tambah_pendonor(){ 
			$this->load->model('M_tambah_pendonor');
			$cek=$this->M_tambah_pendonor->proses();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('tambah_pendonor');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('tambah_pendonor');
			}

		}
		function proses_hapus_pendonor(){ 
		$id=$_GET['id'];
			$this->load->model('M_tambah_pendonor');
			$cek=$this->M_tambah_pendonor->hapus($id);
			if($cek){
				$data2="<script> alert('Data Berhasil di hapus')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('tambah_pendonor');
			}else{
				$data2="<script> alert('Hapus Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('tambah_pendonor');
			}

		}
		public function edit_pendonor() {
			$this->load->helper('url'); 
			$id_pendonor=$_GET['id_pendonor'];
			$this->load->model('M_lihat_data_pendonor');
			$data['data_pendonor'] = $this->M_lihat_data_pendonor->get_user_all();
			$data['edit_pendonor'] = $this->M_lihat_data_pendonor->edit_pendonor($id_pendonor);
			$this->load->view('edit_pendonor', $data);
		}
		public function proses_edit_pendonor() {
			
				$id=$_GET['id'];
				$this->load->model('M_edit_pendonor');        
				$cek=$this->M_edit_pendonor->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('tambah_pendonor');
				}else{
					$this->edit_gagal();
					redirect('edit_pendonor?id='.$id.'');
				}
			
		}
		public function ukuran()
	{
		$this->load->helper('url');
			$this->load->model('M_tambah_ukuran');
			$this->load->model('M_lihat_data_ukuran');
			$data['data_ukuran1'] = $this->M_lihat_data_ukuran->get_user_all();
			
		$this->load->view('tambah_ukuran', $data);
	}
	function proses_tambah_ukuran(){ 
			$this->load->model('M_tambah_ukuran');
			$cek=$this->M_tambah_ukuran->proses();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('tambah_ukuran');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('tambah_ukuran');
			}

		}
		function proses_hapus_ukuran(){ 
		$id=$_GET['id'];
			$this->load->model('M_tambah_ukuran');
			$cek=$this->M_tambah_ukuran->hapus($id);
			if($cek){
				$data2="<script> alert('Data Berhasil di hapus')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('tambah_ukuran');
			}else{
				$data2="<script> alert('Hapus Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('tambah_ukuran');
			}

		}
		public function pengajuan(){
		$this->load->view('pengajuan');
	}
	public function tambah_rs2(){
		$this->load->view('tambah_rs2');
	}
		
}


