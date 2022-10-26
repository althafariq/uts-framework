<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Domain_model extends CI_Model {
   public function getAll() {
      $sql = "SELECT * FROM domain";

      return $this->db->query($sql)->result();
   }

   public function getById($id) {
      $sql = "SELECT * FROM domain where id_domain = '$id'";
      return $this->db->query($sql)->row();
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

   public function duplicateName($keyword){
      $this->db->where('nama_domain', $keyword);
      $sql = $this->db->get('domain');
      if ($sql->num_rows() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public function editDomain($id) {
      $data = [
         "nama_domain" => $this->input->post('nama_domain', true)
      ];

      $this->db->where('id_domain', $id);
      $this->db->update('domain', $data);
   }

   public function deleteDomain($id) {
      $this->db->where('id_domain', $id);
      $this->db->delete('domain');
   }
}