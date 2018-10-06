<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proses_login extends CI_Controller {

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
			 $this->load->model('M_Login');
    }


	public function index()
	{
		$rs=$this->M_Login->login_rs();
		$admin=$this->M_Login->login();

		if(isset($rs[0]->id_rs)){
			$this->session->set_userdata('rs',$rs[0]->id_rs);
			redirect('darah/lihat_stok_darah');
		}else if(isset($admin[0]->user)){
			$this->session->set_userdata('user',$admin[0]->level);
			$this->session->set_userdata('user_data',$admin[0]->id_pmi);
			redirect('darah/lihat_stok_darah');
		}else{
			$this->alert("danger","Gagal","Maaf Anda Gagal Login");
			redirect('login');
		}



	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('login');
	}

	function alert($warna,$status,$isi){
			 $this->session->set_flashdata('pesan',
			 '<div class="alert alert-solid-'.$warna.'" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
								</button>
								<strong>'.$status.'</strong> '.$isi.'
				</div>
				');
		 }

}
