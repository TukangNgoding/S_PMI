<?php
    class M_login extends CI_Model{

      function login_rs(){

  			$username = $this->input->post('username');
  			$password= $this->input->post('password');
        $password=md5($password);
          $sql="SELECT * FROM rs where id_rs='$username' and password='$password'";
      		$query = $this->db->query($sql);
          return $query->result();
      }
      function login(){

  			$username = $this->input->post('username');
  			$password= $this->input->post('password');
        $password=md5($password);
          $sql="SELECT * FROM user where user='$username' and password='$password'";
      		$query = $this->db->query($sql);
          return $query->result();
      }


		function daftar(){
				$rs= array(
				  'kode_rs'=>$this->input->post('kode_rumah_sakit'),
				  'nama_rs'=>$this->input->post('nama_rumah_sakit'),
				  'email'=>$this->input->post('email'),
				  'no_hp'=>$this->input->post('no_hp'),
				  'password'=>md5($this->input->post('password'))
				);
			$cek1=$this->db->insert('rs',$rs);

			if($cek1){

        if (!is_dir('gambar/'.$this->input->post('kode_rumah_sakit'))) {
              mkdir('./gambar/' . $this->input->post('kode_rumah_sakit'), 0777, TRUE);
          }
          return true;
      }else{
        return false;
      }
	  }

}
?>
