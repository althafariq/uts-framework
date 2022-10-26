<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hosting_model extends CI_Model {
   public function getAll() {
      $sql = "SELECT * FROM hosting";

      return $this->db->query($sql)->result();
   }

   public function insertHosting() {
      $data = [
         "nama_hosting" => $this->input->post('nama_hosting', true),
         "has_cpanel" => $this->input->post('has_cpanel', true),
         "has_ssl" => $this->input->post('has_ssl', true),
         "has_subdomain" => $this->input->post('has_subdomain', true),
         "has_storage" => $this->input->post('has_storage', true),
         "num_database" => $this->input->post('num_database', true),
         "harga" => $this->input->post('harga', true),
      ];

      $this->db->insert('hosting', $data);
   }

}