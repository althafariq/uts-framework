<?php 

class Hosting extends CI_Controller {
   public function __construct(){
      parent::__construct();
      $this->load->model('Hosting_model');
      $this->load->library('form_validation');
      $this->load->library('Templates');
   }

   public function index(){
      $data['title'] = 'Hosting';
      $data['hosting'] = $this->Hosting_model->getAll();
      $this->templates->display('hosting/index', $data);
   }

   public function add(){
      $data['title'] = 'Add New Domain';

      $this->form_validation->set_rules('nama_domain', 'Name Domain', 'required');
      
      
      if ($this->form_validation->run() == FALSE) {
          $this->templates->display('hosting/add', $data);
      } else {
         $keyword = $this->input->post('nama_domain', true);
         $checkvalidation = $this->Hosting_model->duplicatedDomain($keyword);
            if ($checkvalidation == TRUE) {
               $this->Hosting_model->insertDomain();
               $this->session->set_flashdata('flash', "added");
               redirect('hosting');
            } else {
               $this->session->set_flashdata('flash', "Domain already taken");
               redirect('hosting/add');
            }
      }
  }
}

?>