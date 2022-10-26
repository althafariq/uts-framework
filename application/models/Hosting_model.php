<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hosting_model extends CI_Model {
   public function getAll() {
      $sql = "SELECT * FROM hosting";

      return $this->db->query($sql)->result();
   }

   public function insertDomain() {
      $data = [
         "nama_domain" => $this->input->post('nama_domain', true),
      ];

      $this->db->insert('domain', $data);
   }

   public function duplicatedDomain($keyword) {
      $this->db->where('nama_domain', $keyword);
      $sql = $this->db->get('domain');
      if ($sql->num_rows() > 0) {
         return false;
      } else {
         return true;
      }
   }
}