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
      $data['title'] = 'Add New Plan';

      $this->form_validation->set_rules('nama_hosting', 'Hosting Name', 'required');
      $this->form_validation->set_rules('has_cpanel', 'cPanel', 'required');
      $this->form_validation->set_rules('has_ssl', 'SSL', 'required');
      $this->form_validation->set_rules('has_subdomain', 'Subdomain', 'required|numeric');
      $this->form_validation->set_rules('has_storage', 'Storage', 'required|numeric');
      $this->form_validation->set_rules('num_database', 'Database', 'required|numeric');
      $this->form_validation->set_rules('harga', 'Price', 'required|numeric');
      
      
      if ($this->form_validation->run() == FALSE) {
          $this->templates->display('hosting/add', $data);
      } else {
         $this->Hosting_model->insertHosting();
         $this->session->set_flashdata('flash', "added");
         redirect('hosting');
      } 
   
  }
}

?>