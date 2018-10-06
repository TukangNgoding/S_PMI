<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendonor extends CI_Controller {

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
			 $this->load->model('M_pendonor');
			// $this->load->model('M_lihat_data_komponen');
			// $this->load->model('M_pmi');
    }
	public function index()
	{
		$this->load->view('login2');
	}
	public function data_pendonor()
	{
		$cek=$this->M_pendonor->data();
		if($cek){
			$data['pendonor'] = $this->M_pendonor->data();;
			$data['kantong'] = $this->M_pendonor->data_kantong();;
			$this->load->view('detail_pendonor',$data);
		}else{
				redirect('login2');
		}

	}
	public function detail_pendonor()
	{
		$this->load->view('detail_pendonor');
	}

}
