<?php
class M_pendonor extends CI_Model{

      function data()
      {
          $kode_pendonor = $this->input->post('kode_pendonor');
          $query=$this->db->query("select * from pendonor where id_pendonor='$kode_pendonor' ");
          return $query->result();
      }
      function data_kantong()
      {
          $kode_pendonor = $this->input->post('kode_pendonor');
          $query=$this->db->query("select * from kantong_darah where id_pendonor='$kode_pendonor' ");
          return $query->result();
      }

}
